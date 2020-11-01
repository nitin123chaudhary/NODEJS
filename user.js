const express=require("express");
const path=require("path");
const router=express.Router();

router.get('/',(req,res,next)=>{
    const filepath=path.join(__dirname,"../","views","user.html");
    res.sendFile(filepath);
    
});

module.exports=router;