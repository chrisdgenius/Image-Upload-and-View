const express = require("express");

const router = express.Router();

const mongoose = require("mongoose");

// define the storage

const multer = require("multer");

const diskStorage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, 'uploads');
  },
//  filename: function(req, file, cb) {
//    cb(null, new Date().toISOString() + file.originalname);
 // }
//});

filename: (req, file, cb) => {
    const mimeType = file.mimetype.split('/');
    const fileType = mimeType[1];
    const fileName = file.originalname + '.' + fileType;
    cb(null, fileName);
  },
});

const fileFilter = (req, file, cb) => {
  const allowedMimeTypes = ['image/png', 'image/jpeg', 'image/jpg'];
  allowedMimeTypes.includes(file.mimetype) ? cb(null, true) : cb(null, false);
};

const upload = multer({ storage: diskStorage, fileFilter: fileFilter }).single(
    'image'
  );


const campaignSchema = require("../models/profile");

//router.post("/profile", (req, res, next) => {

    router.post("/profile",upload, (req, res, next) => {
        console.log(req.file)
  const product = new campaignSchema({
    _id: new mongoose.Types.ObjectId(),
    name: req.body.name,
    price: req.body.price,
   imagePath: req.file.path,
  // imagePath: req.body.imagePath
  });
  product
    .save()
    .then((response) => {
      console.log(response);
      res.status(201).json({
        message: "Created product successfully",
        result: response,

      //  request: {
    //        type: 'GET',
    //        url: "http://localhost:5000/api/profile/" + result._id
    //    }
      });
      
    })
    .catch((error) => {
        res.status(500).json({
          error: error,
        });
        console.log(error);
      });
});







// Get Single User by username
router.route('/profile/:names').get( (req, res, next) => {
    //  userSchema.findOne({ country: 'id' }, function (err, userSchema) {});
    const qq=req.params.names;
    console.log(qq);
    const query = { name: qq };
    let  getCampaign;
    campaignSchema.findOne(query).then( Campaign => {
        if (!Campaign) {
            return res.status(401).json({
                message: " No campaign found"
            });
        }
        
        getCampaign=  Campaign
    }).then(response => {
        res.status(200).json({
            name:  getCampaign.name,
            price:  getCampaign.price,
            imagePath:  getCampaign.imagePath
        });
    }).catch(err => {
        return res.status(401).json({
            message: "Authentication failed"
        });
         
    });
      
  })




module.exports = router;
