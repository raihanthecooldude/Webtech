var express = require('express');
var areaModel = require.main.require('./models/area-model');
var foodModel = require.main.require('./models/food-model');
var userModel = require.main.require('./models/user-model');
var router = express.Router();


// router.get('*', function(request, response, next){
// 	console.log(request.session.un)
// 	if(request.session.un != ""){
// 		next();
// 	}else{
// 		response.redirect('/login');
// 	}
// });

// router.get('/', function(request, response){
// 	userModel.getAll(function (result)
// 	{
// 		response.render('home/emp-list', {userList : result});
// 	})
// });

router.get('/', function(request, response){
	
	// console.log(searchparams);
	userModel.getAll(function(result)
	{
		// console.log(result);
		response.render('home/emp-list', {userList : result});
	})
});



module.exports = router;