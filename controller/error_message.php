<?php
//		$_SESSION['errors']['beta']='coucou';
				if (@$_SESSION['errors']!=null){
						$errorMessage="<div class='error_message'>";
						foreach (@$_SESSION['errors'] as $value){
								$errorMessage .="<p> $value</p>";
						}
						$errorMessage .="</div>";
				}else{
						$errorMessage=null;
				}
?>

