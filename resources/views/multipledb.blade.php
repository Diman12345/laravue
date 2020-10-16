<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
				<h2>Contacts (From 1st Database)</h2>
                <table class="table mb-5">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                  	@foreach($contacts as $contact)
                    <tr>
                      <td>{{ $contact->nama }}</td>
                      <td>{{ $contact->phone }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
					<h2>Articles (From 2nd Database)</h2>
	                <table class="table mb-5">
	                  <thead>
	                    <tr>
	                      <th scope="col">Title</th>
	                      <th scope="col">Body</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                  	@foreach($articles as $article)
	                    <tr>
	                      <td>{{ $article->title }}</td>
	                      <td>{{ $article->body }}</td>
	                    </tr>
	                    @endforeach
	                  </tbody>
	                </table>
            </div>
        </div>
    </body>
</html>