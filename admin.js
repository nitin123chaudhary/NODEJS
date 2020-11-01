const express = require('express');
const router = express.Router();
const employeesDetails = require('../modals/employee.json');
const addEmployeeController = require('../controllers/addEmployee');
const getEmployeeController = require('../controllers/getEmployee');
const addEmployeeFormValidator = require('../middlewares/addEmployeeFormValidator');

router.get('/',(req,res)=>{
  res.render('home',{
    employees: employeesDetails
  });
})

router.get('/employees/:id',(req,res)=>{
  employeeDetail = getEmployeeController(employeesDetails,req.params.id)
  res.render('employee',{
    employee: employeeDetail
  });
})

router.get('/add-employee',(req,res)=>{
  res.render('addEmployee',{
    formErr: false
  });
})

router.post('/add-employee',addEmployeeFormValidator,addEmployeeController);

module.exports = router;