//Define an angular module for our app
var app = angular.module('myApp', []);

app.controller('projectController', function ($scope, $http) {
    //alert("CONTROLLER");
    getProject(); // Load all available tasks 
    getTables();
    getRezervations();

  function getProject(){  
      $http.post("projects/getProject.php?userID=1").success(function (data) {
      $scope.projects = data;
      console.log($scope.projects)
  });
 
  };

  $scope.addProject = function (name, description, userID) {
      $http.post("projects/addProject.php?memberID=" + userID + "&name=" + name + "&description=" + description).success(function (data) {
        getProject();
        $scope.description = "";
        $scope.name = "";
      });
  };
  $scope.deleteTask = function (ID) {
    if(confirm("Are you sure to delete this line?")){
    $http.post("projects/deleteProjects.php?ID="+ID).success(function(data){
        getProject();
      });
    }
  };

  $scope.toggleStatus = function(item, status, task) {
    if(status=='2'){status='0';}else{status='2';}
      $http.post("ajax/updateTask.php?taskID="+item+"&status="+status).success(function(data){
        getProject();
      });
  };

    //TABLES

  function getTables() {
      $http.post("rezervari/getTable.php").success(function (data) {
          $scope.tables = data;
          //alert($scope.tables)
      });

  };

  function getRezervations() {
      $http.post("rezervari/getRezervation.php").success(function (data) {
          $scope.rezervations = data;
          //alert($scope.rezervations);
      });

  };
  
  $scope.addTable = function (projectID, TableName) {
      //alert(projectID+" "+ TableName);
      $http.post("rezervari/addTable.php?projectID=" + projectID + "&name=" + TableName).success(function (data) {
          getTables();
          
      });
      
  };

  $scope.addRezervation = function (tableID, tableName, projectID) {
      $http.post("rezervari/addRezervation.php?tableID=" + tableID + "&projectID=" + projectID + "&tableName=" + tableName).success(function (data) {
          getRezervations();

      });
  }

});
