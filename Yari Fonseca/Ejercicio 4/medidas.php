<?php 

$cantidad = $_POST['cantidad'];
$medicion= $_POST['medicion'];
$medida = $_POST['medida'];
$conversion;

switch ($medicion){ 
	case '1':
		
		if ($medida == 1) 
		{
			$conversion = $cantidad / 1;
		}

		else
		{
			if ($medida== 2) 
			{
				$conversion = $cantidad * 1000;
			}

			else
			{
				if ($medida == 3) 
				{
					$conversion = $cantidad * 39370;
				}

				else
				{
					if ($medida == 4) 
					{
						$conversion = $cantidad * 100000;
					}
				}
			}
		}

		echo "El resultado de la conversion es: ",$conversion;

		break;
	case '2':
		
		if ($salida == 1) 
		{
			$conversion = $cantidad * 0.001;
		}

		else
		{
			if ($salida == 2) 
			{
				$conversion = $cantidad * 1;
			}

			else
			{
				if ($salida == 3) 
				{
					$conversion = $cantidad * 39.3701;
				}
				else
				{
					if ($salida == 4) 
					{
						$conversion = $cantidad * 100;
					}
				}
			}
		}

	echo "El resultado de la conversion es: ", $conversion;

		break;

		case '3':
			if ($salida == 1) 
			{
				$conversion = $cantidad * 0.000025;
			}

			else
			{
				if ($salida == 2) 
				{
					$conversion = $cantidad* 0.0254;
				}

				else
				{
					if ($salida == 3) 
					{
						$conversion = $cantidad * 1;
					}
					else
					{
						if ($salida) 
						{
							$conversion = $cantidad * 2.54000;
						}
					}
				}
			}
			echo "El resultado de la conversion es: ", $conversion;
			break;

			case '4':
				if ($salida == 1) 
				{
					$conversion = $cantidad * 0.00001;
				}

				else
				{
					if ($salida == 2) 
					{
						$conversion = $cantidad * 0.01;
					}

					else
					 {
						if ($salida == 3) 
						{
							$conversion = $cantidad * 0.393701;
						}
						else
						{
							if ($salida ==4)
							 {
								$conversion = $cantidad * 1;
							}
						}
					}
				}

			echo "El resultado de la conversion es: ", $conversion;
default:
		# code...
		break;
}


 ?>