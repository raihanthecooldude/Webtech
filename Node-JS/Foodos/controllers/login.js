var express = require('express');
var userModel = require.main.require('./models/user-model');
var router = express.Router();

router.get('/', function(request, response){
	response.render('login/index');
});

router.post('/', function(request, response){

	var user = {
		username : request.body.un,
		password : request.body.pw
	};
	// console.log(user);
	
	userModel.validate(user, function(status, type){
		if (status)
		{
			if (type == "admin")
			{
				console.log(request.body.un);
				request.session.un = request.body.un;
				console.log(request.session.un);
				response.redirect('/admin');
			}
			else
			{
				response.redirect('/superadmin');
			}
		}
		else
		{
			response.redirect('/login');
		}
	});

});

module.exports = router;