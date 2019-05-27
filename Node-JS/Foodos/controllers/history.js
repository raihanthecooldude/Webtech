var express         = require('express');
var anonymousModel	= require.main.require('./models/anonymous-model');
var historyModel	= require.main.require('./models/history-model');
var router          = express.Router();


router.get('/', function(request, response){
	
	// console.log(searchparams);
	historyModel.getAll(function(result)
	{
		// console.log(result);
		response.render('history/index', {historylist : result});
	})
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