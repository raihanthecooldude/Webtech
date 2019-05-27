var db = require('./db');

module.exports={
	
	getAll: function(callback){
		var sql = "SELECT * FROM food";
		db.getResult(sql, [], function(result){
			callback(result);
		});
	},
	getAllArea: function(searchparams, callback){
		console.log(searchparams);
		var sql = "SELECT * FROM restaurant, food, restaurant_by_area, area where restaurant_by_area.AID = area.AID and restaurant_by_area.RID = restaurant.RID and restaurant.RID = food.RID and food.category LIKE '" +searchparams.food+ "' and food.price <= "+searchparams.price+" and area.area_name ='"+searchparams.area+"'";
		// var sql2= "select * from restaurant, food, restaurant_by_area, area where restaurant_by_area.AID = area.AID and restaurant_by_area.RID = restaurant.RID and restaurant.RID = food.RID and food.category = 'Sea Food' and price <= 500 and area.area_name = 'Dhanmondi'";
		// var sql = "SELECT * FROM food";
		console.log(sql);
		db.getResult(sql, [], function(result){
			callback(result);
		});
	}
};