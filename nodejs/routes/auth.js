module.exports = function(app,fs)
{
   const mysql  = require('mysql');

    require('dotenv').config({ path: '/var/www/html/web/db.env' });

    var connection = mysql.createConnection({
        host     : process.env.DB_HOST,
        user     : process.env.DB_USER,
        password : process.env.DB_PASS,
        database : process.env.DB_NAME,
        charset  : 'utf8_general_ci'
      });
      
      connection.connect();

   //최초접속시 ejs파일
    app.get('/auth',function(req,res){
      res.render('auth.ejs')
     });  

     //auth.ejs를 통해 로그인인증되었다면 세션저장하고 메인페이지로 이동
     app.post('/auth/ok',function(req,res){
        req.session.is_logined =true;
        req.session.userID = req.body.user;
        req.session.nickname = req.body.nickname;
      
        req.session.save(function(){
         res.redirect('/')
            }); 
        });
        
}