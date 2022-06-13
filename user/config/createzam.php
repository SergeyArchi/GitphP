<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin-style.css" rel="stylesheet">
    <link href="/admin/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="pricing.css" rel="stylesheet">
    <title>Document</title>
</head>
<body style="color: #fff;">

<link rel="stylesheet" href="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.css" />
<link rel="stylesheet" href="https://bootstraptema.ru/plugins/font-awesome/4-4-0/font-awesome.min.css" />
<script type="text/javascript" src="https://bootstraptema.ru/plugins/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://bootstraptema.ru/plugins/2015/b-v3-3-6/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>



a:hover,a:focus{
 outline: none;
 text-decoration: none;
}
.tab{
 background: white;
 background: -webkit-linear-gradient(to bottom, #6f0000, #200122);
 background: linear-gradient(to bottom, #6f3332, #200122);
 padding: 40px 50px;
 position: relative;
}
.tab:before{
 content: "";
 width: 100%;
 height: 100%;
 display: block;
 position: absolute;
 top: 0;
 left: 0;
 background: linear-gradient(#4e3a6a,#1f6b43);
 opacity: 0.85;
}
.tab .nav-tabs{
 border-bottom: none;
 padding: 0 20px;
 position: relative;
}
.tab .nav-tabs li{ margin: 0 30px 0 0; }
.tab .nav-tabs li a{
 font-size: 18px;
 color: white;
 border-radius: 0;
 text-transform: uppercase;
 background: transparent;
 padding: 0;
 margin-right: 0;
 border: none;
 border-bottom: 2px solid transparent;
 opacity: 0.5;
 position: relative;
 transition: all 0.5s ease 0s;
}
.tab .nav-tabs li a:hover{ background: transparent; }
.tab .nav-tabs li.active a,
.tab .nav-tabs li.active a:focus,
.tab .nav-tabs li.active a:hover{
 border: none;
 background: transparent;
 opacity: 1;
 border-bottom: 2px solid #eec111;
 color: #fff;
}
.tab .tab-content{
 padding: 20px 0 0 0;
 margin-top: 40px;
 background: transparent;
 z-index: 1;
 position: relative;
}
.form-bg{ background: #ddd; }
.form-horizontal .form-group{
 margin: 0 0 15px 0;
 position: relative;
}
.form-horizontal .form-control{
 height: 40px;
 background: rgba(255,255,255,0.2);
 border: none;
 border-radius: 20px;
 box-shadow: none;
 padding: 0 20px;
 font-size: 14px;
 font-weight: bold;
 color: white;
 transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
 box-shadow: none;
 outline: 0 none;
}
.form-horizontal .form-group label{
 padding: 0 20px;
 color: white;
 text-transform: capitalize;
 margin-bottom: 10px;
}
.form-horizontal .main-checkbox{
 width: 20px;
 height: 20px;
 background: #eec111;
 float: left;
 margin: 5px 0 0 20px;
 border: 1px solid #eec111;
 position: relative;
}
.form-horizontal .main-checkbox label{
 width: 20px;
 height: 20px;
 position: absolute;
 top: 0;
 left: 0;
 cursor: pointer;
}
.form-horizontal .main-checkbox label:after{
 content: "";
 width: 10px;
 height: 5px;
 position: absolute;
 top: 5px;
 left: 4px;
 border: 3px solid #fff;
 border-top: none;
 border-right: none;
 background: transparent;
 opacity: 0;
 -webkit-transform: rotate(-45deg);
 transform: rotate(-45deg);
}
.form-horizontal .main-checkbox input[type=checkbox]{ visibility: hidden; }
.form-horizontal .main-checkbox input[type=checkbox]:checked + label:after{ opacity: 1; }
.form-horizontal .text{
 float: left;
 font-size: 14px;
 font-weight: bold;
 color: white;
 margin-left: 7px;
 line-height: 20px;
 padding-top: 5px;
 text-transform: capitalize;
}
.form-horizontal .btn{
 width: 100%;
 background: #eec111;
 padding: 10px 20px;
 border: none;
 font-size: 14px;
 font-weight: bold;
 color: white;
 border-radius: 20px;
 text-transform: uppercase;
 margin: 20px 0 30px 0;
}
.form-horizontal .btn:focus{
 background: #eec111;
 color: white;
 outline: none;
 box-shadow: none;
}
.form-horizontal .forgot-pass{
 border-top: 1px solid #615f6c;
 margin: 0;
 text-align: center;
}
.form-horizontal .forgot-pass .btn{
 width: auto;
 background: transparent;
 margin: 30px 0 0 0;
 color: white;
 text-transform: capitalize;
 transition: all 0.3s ease 0s;
}
.btn span.fa-check {
 opacity: 0.2;
 }

 .btn.active span.fa-check {
 opacity: 1;
 }
.form-horizontal .forgot-pass .btn:hover{ color: white; }
@media only screen and (max-width: 479px){
 .tab{ padding: 40px 20px; }
}
</style>

<div class="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <div class="tab" role="tabpanel">
        <div class="tab-content tabs">
        <form method="post" action="profile_block/checki.php">
        <table class="table table-bordered">
	      <tbody>
		    <tr>
			<td><input type="checkbox" name="prodid[]" value="Car"></td>
			<td> Демонтаж
				<input type="hidden" name="prodname[]" value="Car">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control">Квадратура</td>
			<td><input type="number" name="prod_qty[]" class="form-control">Кількість квартир</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Bike"></td>
			<td>Вивоз сміття
				<input type="hidden" name="prodname[]" value="Bike">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control">Квадратура</td>
			<td><input type="number" name="prod_qty[]" class="form-control">Кількість квартир</td>
		</tr>
		<tr>
			<td><input type="checkbox" name="prodid[]" value="Accessories"></td>
			<td>Будівництво
				<input type="hidden" name="prodname[]" value="Accessories">
			</td>
			<td><input type="number" name="prod_price[]" class="form-control">Квадратура</td>
			<td><input type="number" name="prod_qty[]" class="form-control">Кількість квартир</td>
		</tr>
	</tbody>
            <div class="form-group">
              <label for="exampleInputEmail1">Вулиця, будинок, квартира</label>
              <input type="text" class="form-control" id="were" name="were">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Добавте декілька коментарів для наших специалістів</label>
              <input type="text" class="form-control" id="info_zam" name="info_zam">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Опишіть дедлайни</label>
              <input type="text" class="form-control" id="prise" name="prise">
            </div>
            <div class="text-center">
	          
	          </div>
            </form>
            <br>
  <br>
  <br>
  <br>
  
      </table>
      <br>
      <br>
    <input type="submit" name="submit" class="btn btn-success" value="Submit">
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>