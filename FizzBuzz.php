<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FizzBuzz</title>
  </head>
  <body>
      <div class="container mt-5 col-5">
          <div class="title text-center mb-3">
            <h1>Ejercicio <span class="badge badge-dark">Fizz Buzz</span></h1>
          </div>
          <div id="contenido" class="text-center">
		  <?php
				foreach (range(1, 100) as $num) {
					if ($num % 3 == 0 && $num % 5 == 0) {
						echo 'FizzBuzz', '<br>';
					}elseif ($num % 5 == 0) {
						echo 'Buzz', '<br>';
					}elseif ($num % 3 == 0) {
						echo 'Fizz', '<br>';
					}else {
						echo $num, '<br>';
					}
				}
			?>
		  </div>
				
              </tbody>
          </table>
      </div>
  </body>
</html>