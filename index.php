<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow">

	<meta property="og:title" content="Titulo Personalizado" />
	<meta property="og:description" content="Conteúdo da descrição que aparece no facebook"/>
	<meta property="og:site_name" content="Title Site" />
	<meta property="og:url" content="URL corrente" />
	<meta property="fb:admins" content="ID da page"/>

	<script data-main="media/js/main" src="media/vendor/requirejs-jquery/require-jquery.js"></script>

	<link rel="stylesheet" href="media/vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="media/css/tree.css">

	<title>Tree</title>
</head>

<body>

	<div class="wrap">

		<div class="wrap-tree tree-accordion">
			<ul class="no-list list-tree">
				<li>
					<span class="text text-idioma">
						<i class="fa fa-folder-open"></i>
						Produtos
					</span>
					<ul class="no-list">
						<li>
							<span class="text text-idioma">
								<i class="fa fa-folder-open"></i>
								Português
							</span>
							<ul class="no-list">
								<li>
									<span class="text text-idioma">
										<i class="fa fa-folder-open"></i>
										XPTO
									</span>
									<ul class="no-list">
										<li>
											<a class="text arq">
												<input type="checkbox" name="" value="30" class="checkbox">
												<i class="fa fa-cloud-download"></i>
												fsdfsdf
											</a>
											<span class="type">Premium</span>
										</li>
										<li>
											<a class="text arq">
												<input type="checkbox" name="" value="31" class="checkbox">
												<i class="fa fa-cloud-download"></i>
												fsdfsdf
											</a>
											<span class="type">Premium</span>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<span class="text text-idioma">
						<i class="fa fa-folder-open"></i>
						Produtos
					</span>
					<ul class="no-list">
						<li>
							<a class="text arq">
								<input type="checkbox" name="" value="30" class="checkbox">
								<i class="fa fa-cloud-download"></i>
								fsdfsdf
							</a>
							<span class="type">Premium</span>
						</li>
						<li>
							<a class="text arq">
								<input type="checkbox" name="" value="31" class="checkbox">
								<i class="fa fa-cloud-download"></i>
								fsdfsdf
							</a>
							<span class="type">Premium</span>
						</li>
					</ul>
				</li>
				<li>
					<span class="text text-idioma">
						<i class="fa fa-folder-open"></i>
						Produtos
					</span>
					<ul class="no-list">
						<li>
							<span class="text text-idioma">
								<i class="fa fa-folder-open"></i>
								XJ6
							</span>
							<ul class="no-list">
								<li>
									<a class="text arq">
										<input type="checkbox" name="" value="30" class="checkbox">
										<i class="fa fa-cloud-download"></i>
										fsdfsdf
									</a>
									<span class="type">Premium</span>
								</li>
								<li>
									<a class="text arq">
										<input type="checkbox" name="" value="31" class="checkbox">
										<i class="fa fa-cloud-download"></i>
										fsdfsdf
									</a>
									<span class="type">Premium</span>
								</li>
							</ul>
						</li>
						<li>
							<span class="text text-idioma">
								<i class="fa fa-folder-open"></i>
								XJ8
							</span>
							<ul class="no-list">
								<li>
									<span class="text text-idioma">
										<i class="fa fa-folder-open"></i>
										XJ8
									</span>
									<ul class="no-list">
										<li>
											<a class="text arq">
												<input type="checkbox" name="" value="30" class="checkbox">
												<i class="fa fa-cloud-download"></i>
												fsdfsdf
											</a>
											<span class="type">Premium</span>
										</li>
										<li>
											<a class="text arq">
												<input type="checkbox" name="" value="31" class="checkbox">
												<i class="fa fa-cloud-download"></i>
												fsdfsdf
											</a>
											<span class="type">Premium</span>
										</li>
									</ul>
								</li>
								<li>
									<a class="text arq">
										<input type="checkbox" name="" value="31" class="checkbox">
										<i class="fa fa-cloud-download"></i>
										fsdfsdf
									</a>
									<span class="type">Premium</span>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<script type="text/javascript">
			require(['Common/Tree'], function(Tree){
				Tree.ready();
			})
		</script>
	</div>

</body>
</html>