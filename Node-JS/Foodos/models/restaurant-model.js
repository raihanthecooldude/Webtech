var db = require('./db');

module.exports={
	
	get: function(rid, callback){
		var sql = "select * from restaurant where rid=?";
		db.getResult(sql, [rid], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	
	getAll: function(callback){
		var sql = "SELECT * FROM restaurant";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(restaurant, callback){
		var sql = "INSERT INTO restaurant values(?, ?, ?, ?)";
		db.execute(sql, [restaurant.rid, restaurant.restaurant_name, restaurant.address, restaurant.restaurant_link], function(success){
			callback(success);
		});
	},
	update: function(restaurant, callback){
		var sql = "UPDATE restaurant set restaurant_name=?, address=?, restaurant_link=? where rid=?";
		db.execute(sql, [restaurant.restaurant_name, restaurant.address, restaurant.restaurant_link, restaurant.rid], function(status){
			callback(status);
		});
	},
};