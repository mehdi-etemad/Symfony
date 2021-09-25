<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
class TestController extends AbstractController {
	public function Index() : Response {
		return Response('<html><body>Index - <a href="./response">Index - Response</a></body></html>');
	}
	public function IndexResponse() : Response {
		return Response('<html><body>Hello Sym</body></html>');
	}
	public function IndexRedirect() : RedirectResponse {
		return $this->redirect('https://webnian.ir');
	}
	public function IndexRedirectToRoute() : RedirectResponse {
		return $this->redirectToRoute('IndexResponse');
	}
	public function IndexRender() : Response {
		return $this->render('Index.html.twing');
	}
}
?>