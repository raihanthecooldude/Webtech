var db = require('./db');

module.exports={
	
	get: function(userId, callback){
		var sql = "select * from user where uid=?";
		db.getResult(sql, [userId], function(result){
			//console.log(result);
			callback(result[0]);
		});
	},
	getAll: function(callback){
		var sql = "SELECT * FROM user";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	insert: function(user, callback){
		var sql = "INSERT INTO user values(null, ?, ?, ?, ?, ?)";
		console.log(sql);
		db.execute(sql, [user.name, user.username, user.password, user.email, user.type], function(success){
			callback(success);
		});
	},
	validate: function(user, callback){
		var sql = "select * from user where username=? and password=?";
		db.getResult(sql, [user.username, user.password], function(result){
			console.log("One" + result[0].type);
			if(result.length > 0){
				console.log("Two" + result[0].type);
				callback(true, result[0].type);
				
			}else{
				callback(false, "");
			}
		});
	},
	update: function(user, callback){
		var sql = "UPDATE user set username=?, type=? where uid=?";
		
		db.execute(sql, [user.username, user.type, user.uid], function(status){
			callback(status);
		});
	},
	delete: function(userId, callback){
		var sql = "Delete from user where uid=?";
		db.execute(sql, [userId], function(status){
			//console.log(result);
			callback(status);
		});
	},
};