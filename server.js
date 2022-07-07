
//const ports = process.env.PORT || 3000;
require ('dotenv').config()
const path = require('path');
const express = require('express')
const mongoose = require('mongoose')
const app = express()
const cors = require ('cors')
const PORT = 5000
const bodyParser = require("body-parser");
const multer = require('multer');

//DATABASES = "mongodb+srv://okonta:okonta@cluster0.xf8ns.mongodb.net/myFirstDatabase?retryWrites=true&w=majority"


  mongoose.connect(process.env.DATABASES, {
    useNewUrlParser: true,
    useUnifiedTopology: true
})

const db = mongoose.connection
db.on('error', (error) => console.error(error))
db.once('open', () => console.log("connected to local MongoDB! is running"))

app.use(express.json())
app.use(cors())




//app.use('/images', express.static('images'));
app.use('/uploads', express.static('uploads'));
// routes
app.use('/api', require('./routes/profiles.js'));



app.listen(PORT, () => {
    console.log('Server running on localhost:' + PORT)
})

// FOR MULTIPLE IMAGE UPLOADING
//const storage = multer.diskStorage({
 // destination: (req, file, callBack) => {
   //   callBack(null, 'uploads')
 // },
  //filename: (req, file, callBack) => {
  //    callBack(null,`${file.originalname} - ${Date.now()}`  )
 // } 


//})

//const upload = multer({ storage: storage })
 
//let upload = multer({ dest: 'uploads/' })







//app.post('/multipleFiles', upload.array('files'), (req, res, next) => {
 // const files = req.files;
 // console.log(req.body);
 // console.log(files);
 // if (!files) {
 //   const error = new Error('No File')
 //   error.httpStatusCode = 400
 //   return next(error)
 // }
 //   res.send({sttus:  'ok'});
//})


//app.use('/images', express.static(path.join('images')));

//app.use('/api/profiles', profilesRoutes);

