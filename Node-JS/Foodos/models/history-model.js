var db = require('./db');

module.exports={
	
	getAll: function(callback){
		var sql = "SELECT * FROM history";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(history, callback){
		var sql = "INSERT INTO history values(null, ?, ?, ?)";
		// console.log(history);
		db.execute(sql, [history.area, history.food, history.price], function(success){
			callback(success);
		});
	},
}