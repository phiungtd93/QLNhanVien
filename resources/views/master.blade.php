<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản Lý Nhân Viên</title>
	<base href="{{ asset('') }}">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/userdetail.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
</head>
<body>
	@yield('content')
</body>
<!-- jQuery -->
<script src="js/jquery-3.2.1.min.js"></script>
 
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/scripts.min.js"></script> -->
<script>
//Refer data
	function refer() {
		var root = '{{url('/')}}';
		$.get(root + '/search', function(data, status){
				console.log(data);
				$.each(data.data, function (key, value) {
					console.log(value);
					button2.onclick = function(){
                				div.innerHTML = 'Nội dung của thẻ div đã bị thay đổi';
                			};
				});
			});
	}
// submit form từ bên ngoài
	window.onload = function() {
	    document.getElementById('save').onclick = function() {
	        document.getElementById('myform').submit();
	        return false;
	    };
	};
</script>
	<script type="text/javascript">
	//load calendar
            (function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</html>