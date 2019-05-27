//DECLARATION
var express 		= require('express');
var bodyParser 		= require('body-parser');
var expressSession 	= require('express-session');
var cookieParser 	= require('cookie-parser');
var home 			= require('./controllers/home');
var login 			= require('./controllers/login');
var logout 			= require('./controllers/logout');
var admin           = require('./controllers/admin');
var superadmin      = require('./controllers/superadmin');
var search 			= require('./controllers/search');
var history         = require('./controllers/history');
var userlist        = require('./controllers/userlist');
var adduser        = require('./controllers/adduser');
var areaModel		= require.main.require('./models/area-model');   
var foodModel		= require.main.require('./models/food-model');    
var historyModel	= require.main.require('./models/history-model');  
var anonymousModel	= require.main.require('./models/anonymous-model');  
var app 			= express();

//CONFIGURATION
app.set('view engine', 'ejs');

//MIDDLEWARE
app.use(bodyParser.urlencoded({extended: false}));
app.use(expressSession({secret: 'hhdhdhdhd', saveUninitialized: true, resave: false}));
app.use(cookieParser());
app.use('/assets', express.static('res'));


//ROUTING
app.use('/login', login);
app.use('/logout', logout);
app.use('/home', home);
app.use('/admin', admin);
app.use('/superadmin', superadmin);
app.use('/search', search);
app.use('/history', history);
app.use('/userlist', userlist);
app.use('/adduser', adduser);

app.get('/', function(request, response){
	areaModel.getAll(function (arealist)
	{
		foodModel.getAll(function (foodlist)
		{
			response.render('index', {area : arealist, food : foodlist});
		})
	});
});
app.post('/', function(request, response){
	var searchparams = {
		area : request.body.area,
		food : request.body.food,
		price : request.body.price
	};
	// console.log(searchparams);
	historyModel.insert(searchparams, function (status)
	{
		if (status) 
		{
			if (request.body.area != "Dhaka")
			{
				request.session.area = request.body.area;
				request.session.food = request.body.food;
				request.session.price = request.body.price;
				// response.redirect('/search');
				
				var searchparams = {
					area : request.session.area,
					food : request.session.food,
					price : request.session.price
				};
				// console.log(searchparams);
				anonymousModel.getAllArea(searchparams, function(result)
				{
					console.log(result);
					response.render('search/result', {foodlist : result});
				})
			}
		}
	});
});


//SERVER STARTUP
app.listen(3000, function(){
	console.log("Server startead at 3000...");
});
