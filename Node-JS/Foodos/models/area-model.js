var db = require('./db');

module.exports={
	
	get: function(aid, callback){
		var sql = "select * from area where aid=?";
		db.getResult(sql, [aid], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	getAll: function(callback){
		var sql = "SELECT * FROM area order by area_name";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(area, callback){
		var sql = "INSERT INTO area values(?, ?, ?)";
		db.execute(sql, [area.aid, area.area_name, area.area_link], function(success){
			callback(success);
		});
	},
	update: function(area, callback){
		var sql = "UPDATE area set area_name=?, where aid=?";
		
		db.execute(sql, [area.area_name, area.aid], function(status){
			callback(status);
		});
	},
};