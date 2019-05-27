var express         = require('express');
var anonymousModel	= require.main.require('./models/anonymous-model');
var userModel	= require.main.require('./models/user-model');
var router          = express.Router();


router.get('/', function(request, response){
	
	// console.log(searchparams);
	response.render('register/index');
});

router.post('/', function(request, response){
	
	var user = {
		name : request.body.name,
		username : request.body.username,
		password : request.body.password,
		email : request.body.email,
		type: 'admin'
		};
	console.log(user);
	userModel.insert(user, function (status)
	{
		if(status)
		{
			console.log(user);
			response.redirect('/userlist');
		}
		else
		{
			response.send("Hoy nai!");
		}
	});
});

// router.get('/history', function(request, response){
// 	var searchparams = {
// 		area : request.session.area,
// 		food : request.session.food,
// 		price : request.session.price
// 	};
// 	// console.log(searchparams);
// 	historyModel.getAll(searchparams, function(result)
// 	{
// 		// console.log(result);
// 		response.render('history', {historylist : result});
// 	})
// });

module.exports = router;