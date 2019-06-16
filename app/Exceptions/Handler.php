<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
	{
		// dd(get_class($exception));
		if ($exception instanceof TokenMismatchException) {
			if ($request->ajax()) {
				return response()->json('Expired token', 500);
			}
			return redirect()
				->back()
				->withInput($request->except('password'))
				->withAlert(['title' => 'Expired Token',
											'text' => 'Your page was opened for too long, the validation token has expired. Please try again',
											'type' => 'error']);
		} else if ($exception instanceof QueryException) {
			// if (!$request->ajax()) {
			// 	session()->flash('alert', ['title' => 'Database error', 'type' => 'error', 'toast' => true]);
			// }
			// _dd(str_before(str_after($exception->getMessage(), 1062), 'for key'));
			// Log::channel('database')->error('Query Exception Occurred', ['$e_obj' => $exception]);

			if ($exception->getCode() == 23000) {
				if ($request->ajax()) {
					return response()->json(str_before(str_after($exception->getMessage(), 1062), 'for key'), 500);
					exit('Query Exception');
				}
				return redirect()
					->back()
					->withInput($request->except('password'))
					->withAlert([
						'text' => str_before(str_after($exception->getMessage(), 1062), 'for key'),
						'title' => 'Duplicate Entry',
						'type' => 'warning',
					]);
			} else {
				if ($request->ajax()) {
					return response()->json(['Error' => 'Query Exception ' . $exception->getMessage()], 500);
				}
				return redirect()
					->back()
					->withInput($request->except('password'))
					->withAlert([
						'text' => 'The requested resource returned an unexpected reply. Try again later.',
						'title' => 'Connection Error',
						'type' => 'warning',
					]);
			}
		} else if ($exception instanceof MethodNotAllowedHttpException) {
			// Log::channel('database')->info('Method Not Allowed Exception', ['$e_obj' => $request->getRequestUri()]);
			if ($request->ajax()) {
				return response()->json(['Error' => 'Method not allowed'], 403);
			}
			return redirect()
				->route('login')
				->withAlert([
					'title' => 'Request type is invalid. Try again.',
					'type' => 'warning',
					'toast' => true
				]);
		} else if ($exception instanceof NotFoundHttpException) {
			// Log::channel('database')->info('Route not found', ['$e_obj' => $request->getRequestUri()]);
			if ($request->ajax()) {
				return response()->json('Url Not found', 404);
			}
		}
		return parent::render($request, $exception);
	}
}
