<?php defined('BASEPATH') or exti('No direct script access allowed!'); ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Curso de Codeigniter Essencial - RBTech">
	<meta name="keywords" content="PHP, Codeigniter, HTML5, CSS3, RBTech">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<title>Curso Codeigniter Essencial | <?php echo $title; ?></title>
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<ul class="list-inline text-right well" style="text-size:14px;font-weight:bold;text-transform:uppercase;">
					<li><a href="<?php echo base_url(); ?>">home</a></li>
					<li><a href="<?php echo base_url('clientes'); ?>">clientes</a></li>
					<li><a href="<?php echo base_url('servicos'); ?>">serviços</a></li>
					<li><a href="<?php echo base_url('sobre'); ?>">sobre</a></li>
					<li><a href="<?php echo base_url('contato'); ?>">contato</a></li>
				</ul>
			</nav>
		</header>
		<hr/>
<!-- HEADER -->

