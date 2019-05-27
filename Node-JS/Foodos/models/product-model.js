var db = require('./db');

module.exports={
	get: function(productId, callback){
		var sql = "select * from product where pid=?";
		db.getResult(sql, [productId], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	getAll: function(callback){
		var sql = "SELECT * FROM product";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(product, callback){
		var sql = "INSERT INTO product values(null, ?, ?,?)";
		db.execute(sql, [product.pname, product.quantity, product.price], function(success){
			callback(success);
		});
	},
	update: function(product, callback){
		var sql = "UPDATE product set pname=?, quantity=?, price=? where pid=?";
		console.log(product);
		db.execute(sql, [product.pname, product.quantity, product.price, product.pid], function(status){
			callback(status);
		});
	},
	delete: function(productId, callback){
		var sql = "delete from product where pid=?";
		db.execute(sql, [productId], function(success){
			callback(success);
		});
	},
}