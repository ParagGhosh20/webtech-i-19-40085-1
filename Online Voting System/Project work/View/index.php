
<style>
  
  *{
  padding: 0;
  margin: 0;
}
.wrapper{
  background: url(aaaad.jpg) no-repeat;
  background-size: cover;
  height: 100vh;
}
.navbar{
  position: fixed;
  height: 80px;
  width: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.4);
}.navbar .logo{
  width: 140px;
  height: auto;
  padding: 20px 100px;
}
.navbar ul{
  float: right;
  margin-right: 20px;
}
.navbar ul li{
  list-style: none;
  margin: 0 8px;
  display: inline-block;
  line-height: 80px;
}
.navbar ul li a{
  font-size: 20px;
  font-family: 'Roboto', sans-serif;
  color: white;
  padding: 6px 13px;
  text-decoration: none;
  transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
  background: gray;
  border-radius: 2px;
}
.search{
  position: absolute;
  left: 40%;
  top: 55%;
  transform: translate(-60%, -50%);
  font-family: monospace;
  user-select: none;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrapper">
      <nav class="navbar">
        <img class="logo" src="Bangla.png">
        <ul>
          <li><a class="active" href="Home_Page.php">Home</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a href="Registration.php">Registration</a></li>

          
          
          
        </ul>
      </nav>

      <div class="search">
        <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>SEARCH INFO</h1>

        <div id="search-bar">
          <label>Search :</label>
          <input type="text" id="search" autocomplete="off">
        </div>
      </td>
    </tr>
    
    <tr>
      <td id="table-data">
      </td>
    </tr>
  </table>
  <div id="error-message"></div>
  <div id="success-message"></div>
  <div id="modal">
    <div id="modal-form">
      <h2></h2>
      <table cellpadding="10px" width="100%">
      </table>
      <div id="close-btn"></div>
    </div>
  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "ajax-load.php",
        type : "POST",
        success : function(data){
          $("#table-data").html(data);
        }
      });
    }
    loadTable(); // Load Table Records on Page Load

    // Insert New Records
    $("#save-button").on("click",function(e){
      e.preventDefault();
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      if(fname == "" || lname == ""){
        $("#error-message").html("All fields are required.").slideDown();
        $("#success-message").slideUp();
      }else{
        $.ajax({
          url: "ajax-insert.php",
          type : "POST",
          data : {first_name:fname, last_name: lname},
          success : function(data){
            if(data == 1){
              loadTable();
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
            }else{
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
            }

          }
        });
      }

    });

    //Delete Records
    $(document).on("click",".delete-btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "ajax-delete.php",
          type : "POST",
          data : {id : studentId},
          success : function(data){
              if(data == 1){
                $(element).closest("tr").fadeOut();
              }else{
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
          }
        });
      }
    });

    //Show Modal Box
    $(document).on("click",".edit-btn", function(){
      $("#modal").show();
      var studentId = $(this).data("eid");

      $.ajax({
        url: "load-update-form.php",
        type: "POST",
        data: {id: studentId },
        success: function(data) {
          $("#modal-form table").html(data);
        }
      })
    });

    //Hide Modal Box
    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });

    //Save Update Form
      $(document).on("click","#edit-submit", function(){
        var stuId = $("#edit-id").val();
        var fname = $("#edit-fname").val();
        var lname = $("#edit-lname").val();

        $.ajax({
          url: "ajax-update-form.php",
          type : "POST",
          data : {id: stuId, first_name: fname, last_name: lname},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              loadTable();
            }
          }
        })
      });

    // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "ajax-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });
</script>
      </div>
       
      <div class="center">
    
      
      
    </div>

</div>
 
</body>





</html>
