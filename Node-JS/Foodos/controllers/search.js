var express = require('express');
var anonymousModel	= require.main.require('./models/anonymous-model');  
var router = express.Router();


// router.get('/', function(request, response){
// 	var searchparams = {
// 		area : request.session.area,
// 		food : request.session.food,
// 		price : request.session.price
// 	};
// 	// console.log(searchparams);
// 	anonymousModel.getAllArea(searchparams, function(result)
// 	{
// 		console.log(result);
// 		response.render('search/result', {foodlist : result});
// 	})
// });

module.exports = router;