var db = require('./db');

module.exports={
	
	getrid: function(rid, callback){
		var sql = "select * from restaurant_by_area where rid=?";
		db.getResult(sql, [rid], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	getaid: function(aid, callback){
		var sql = "select * from restaurant_by_area where aid=?";
		db.getResult(sql, [aid], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	
	getAll: function(callback){
		var sql = "SELECT * FROM restaurant_by_area";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(restaurant_by_area, callback){
		var sql = "INSERT INTO restaurant_by_area values(?, ?)";
		db.execute(sql, [restaurant_by_area.aid, restaurant_by_area.rid], function(success){
			callback(success);
		});
	},
	updateaid: function(restaurant_by_area, callback){
		var sql = "UPDATE restaurant_by_area set aid=? where rid=?";
		
		db.execute(sql, [restaurant_by_area.aid, restaurant_by_area.rid], function(status){
			callback(status);
		});
	},
	updaterid: function(restaurant_by_area, callback){
		var sql = "UPDATE restaurant_by_area set rid=? where aid=?";
		
		db.execute(sql, [restaurant_by_area.rid, restaurant_by_area.aid], function(status){
			callback(status);
		});
	}
};