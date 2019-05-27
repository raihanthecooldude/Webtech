var express = require('express');
var areaModel = require.main.require('./models/area-model');
var foodModel = require.main.require('./models/food-model');
var userModel = require.main.require('./models/user-model');
var router = express.Router();


router.get('*', function(request, response, next){
	console.log(request.session.un)
	if(request.session.un != ""){
		next();
	}else{
		response.redirect('/login');
	}
});

router.get('/', function(request, response){
	
	response.render('home', {name : request.session.un});
});

router.get('/search', function(request, response){
	var area;
	areaModel.getAll(function (arealist)
	{
		area = arealist;
	});
	foodModel.getAll(function (foodlist)
	{
		response.render('search/index', {area : area, food : foodlist})
	});
});

router.post('/search', function(request, response){
	var searchparams = {
		area : request.body.area,
		food : request.body.food,
		price : request.body.price
	};
	response.render('search/index');
});

router.get('/emp-edit/:id', function(request, response){
	
	var userId = request.params.id;
	
	userModel.get(userId, function(result){
		console.log(result);
		response.render('home/emp-edit', {user: result});
	});
});

router.post('/emp-edit/:uid', function(request, response){
	
	var user = {
		uid 		: request.body.uid,
		username: request.body.username,
		type	: request.body.type
		
	};
	
	console.log(user);
	
	userModel.update(user, function(status){
		
		if(status){
			
			response.redirect(request.body.uid);
		}else{
			response.send('Error');
		}
		
	});
});

router.get('/emp-delete/:uid', function(request, response){
	
	var userId = request.params.uid;
	
	userModel.delete(userId, function(status){
		if (status)
		{
			userModel.getAll(function(result){
				console.log(result);
				
				response.render('home/emp-list', {userList: result});
			});
		}
		else
		{
			response.send('error');
		}
	});
});

router.get('/adduser', function(request, response){
	
	response.render('/register/index');
});

// router.get('/userlist', function(request, response){
// 	userModel.getAll(function (result)
// 	{
// 		response.render('/emp-list', {userList : result});
// 	})
// });



module.exports = router;