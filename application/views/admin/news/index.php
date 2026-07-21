<!DOCTYPE html>
<html>
<head>

    <title>News Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-5">

<div class="row">

<div class="col-lg-4">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Add News</h4>

</div>

<div class="card-body">

<form method="post" action="<?= site_url('admin/news/add');?>">

<div class="mb-3">

<label>Title (English)</label>

<input
type="text"
name="title_en"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Title (Hindi)</label>

<input
type="text"
name="title_hi"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Description (English)</label>

<textarea
name="description_en"
class="form-control"
rows="4"></textarea>

</div>

<div class="mb-3">

<label>Description (Hindi)</label>

<textarea
name="description_hi"
class="form-control"
rows="4"></textarea>

</div>

<div class="mb-3">

<label>Date</label>

<input
type="date"
name="news_date"
class="form-control"
required>

</div>

<button
class="btn btn-primary w-100">

Save News

</button>

</form>

</div>

</div>

</div>

<div class="col-lg-8">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h4>All News</h4>

</div>

<table class="table table-bordered table-hover mb-0">

<thead>

<tr>

<th>ID</th>

<th>English</th>

<th>Hindi</th>

<th>Date</th>

<th width="120">

Action

</th>

</tr>

</thead>

<tbody>

<?php foreach($news as $n): ?>

<tr>

<td><?= $n->id; ?></td>

<td><?= $n->title_en; ?></td>

<td><?= $n->title_hi; ?></td>

<td><?= $n->news_date; ?></td>

<td>

<a
onclick="return confirm('Delete?')"
href="<?= site_url('admin/news/delete/'.$n->id);?>"
class="btn btn-danger btn-sm">

Delete

</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</body>

</html>