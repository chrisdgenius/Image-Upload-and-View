
const mongoose = require('mongoose');
const Schema = mongoose.Schema;

let campaignSchema = new Schema({
  _id: mongoose.Schema.Types.ObjectId,
    name: {
        type: String
    },
    price: {
        type: Number
    },
 
    imagePath: {
        type: String
    }
},

{
// to create a collection and retain the name.
    collection: 'Campaign'
}
)
module.exports = mongoose.model('Campaign', campaignSchema )