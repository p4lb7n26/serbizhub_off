<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class serbizhubController extends Controller{
        /**
         * @Route("/")
         * @Method({"GET"})
         */
        public function index() {
            //return new Response('<html><body>Hello SerbizHub</body></html>');
           return $this->render('serbizhub/index.html.twig');
        }

        /**
         * @Route("/about")
         * @Method({"GET"})
         */
        public function about() {
           return $this->render('serbizhub/about.html.twig');
        }

         /**
         * @Route("/contact")
         * @Method({"GET"})
         */
        public function contact() {
            return $this->render('serbizhub/contact.html.twig');
         }

         /**
         * @Route("/services")
         * @Method({"GET"})
         */
        public function services() {
            return $this->render('serbizhub/services.html.twig');
         }

          /**
         * @Route("/careers")
         * @Method({"GET"})
         */
        public function careers() {
            return $this->render('serbizhub/careers.html.twig');
         }
    }