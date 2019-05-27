var express = require('express');
var productModel = require.main.require('./models/food-model');
var router = express.Router();


router.get('*', function(request, response, next){
	
	if(request.session.un != ""){
		next();
	}else{
		response.redirect('/login');
	}
});

router.get('/', function(request, response){
	
	response.redirect('/login');
});


module.exports = router;