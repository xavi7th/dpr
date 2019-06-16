{{--
	Sample Usage

	@param type info, success, question, warning, error
	@param text string
	return back()->withAlert(['text' => implode('<br>', $validator->getMessageBag()->all()), 'type' => 'error']);

	session(['alert' => ['title' => 'A title','text' => 'Some text', 'type' => 'info']])


	--}}

@if (session('alert'))
	@if(isset(session('alert')['toast']))
		echo "
			<script>
				Toast.fire( session('alert')['text'] )
			</script>
		";
	@else
		@php
			$type = session('alert')['type'] ?? null;
			$title = session('alert')['title'] ?? null;
			$text = session('alert')['text'] ?? null;
			echo "
			<script>
					swal.fire( {
							position: 'top',
							type: '$type',
							title: '$title',
							html: '$text',
							showConfirmButton: true,
							timer: 30000
					} )

			</script>
			";
		@endphp
	@endif
@endif
