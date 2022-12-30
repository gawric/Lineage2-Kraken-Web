@extends('layouts.l2templatefolder.l2template')


@section('content')
<main class="content">
			<h1 class="page-title">Download</h1>
			<div class="main-content">
				<h2>H2 Page title</h2>
				<h3>H3 Page title</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<p><img src="images/page-test-img.jpg" alt=""></p>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a <a href="">galley of type and scrambled it to make a type specimen book</a>. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<form>
					<div class="formGroup">
						<p>Choise realm:</p>
						<select>
							<option>Nightmare x50</option>
							<option>Paradise x300</option>
							<option>Warland x1000</option>
						</select>
					</div>
					<div class="formGroup">
						<p>Field content:</p>
						<input type="text" placeholder="Field">
					</div>
					<div class="formGroup">
						<button>Button</button> <a href="" class="button">Button link</a>
					</div>
				</form>
				<table>
					<tbody>
						<tr>
							<td>Table 1</td> <td>Table 2</td> <td>Table 3</td> <td>Table 4</td> <td>Table 5</td>
						</tr>
						<tr>
							<td>Content 1</td> <td>Content 2</td> <td>Content 3</td> <td>Content 4</td> <td>Content 5</td>
						</tr>
						<tr>
							<td>Table 1</td> <td>Table 2</td> <td>Table 3</td> <td>Table 4</td> <td>Table 5</td>
						</tr>
						<tr>
							<td>Content 1</td> <td>Content 2</td> <td>Content 3</td> <td>Content 4</td> <td>Content 5</td>
						</tr>
					</tbody>
				</table>
			</div>
		</main><!-- .content -->
@endsection