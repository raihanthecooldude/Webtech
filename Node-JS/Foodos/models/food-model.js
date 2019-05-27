var db = require('./db');

module.exports={
	
	get: function(fid, callback){
		var sql = "select * from food where fid=?";
		db.getResult(sql, [fid], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	getAll: function(callback){
		var sql = "SELECT * FROM food order by food_name";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(food, callback){
		var sql = "INSERT INTO food values(?, ?, ?, ?, ?)";
		db.execute(sql, [food.fid, food.food_name, food.price, food.category, food.rid], function(success){
			callback(success);
		});
	},
	update: function(food, callback){
		var sql = "UPDATE food set food_name=?, price=?, category=? rid=? where fid=?";
		
		db.execute(sql, [food.food_name, food.price, food.category, food.rid, food.fid], function(status){
			callback(status);
		});
	},
}