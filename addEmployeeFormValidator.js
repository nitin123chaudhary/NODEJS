module.exports = (req,res,next) => {
  // check for phone number length
  const phoneMatchPattern = new RegExp('[0-9]{10}');
  if(!phoneMatchPattern.test(req.body.phonenumber)){
    res.render('addEmployee',{
      formErr: true,
      errMsg:"Please type 10 digit number!"
    })
  }
  // check for select options
  else if(req.body.city == '-1'){
    res.render('addEmployee',{
      formErr: true,
      errMsg:"Please select city!"
    })
  }
  else{
    next()
  }
}