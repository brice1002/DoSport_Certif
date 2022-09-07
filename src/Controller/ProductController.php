<?php

namespace App\Controller;

use App\Classes\Search;
use App\Entity\Product;
use App\Entity\Category;
use App\Form\SearchType;
use App\Form\SearchVACType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        return $this->em = $em;
    }


    // Affichage de la liste des produits
    #[Route('/nos-produits', name: 'products')]
    public function index(Request $request): Response
    {
        $products = $this->em->getRepository(Product::class)->findAll();

        $search = new Search();
        // dd($products);
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            // $search = $form->getData();  //redondant. Pas besoin car l'objet search est déja lié au formulaire 
            $products = $this->em->getRepository(Product::class)->findWithSearch($search);
        }


        return $this->render('product/index.html.twig', [
            'products' => $products,
            'form' => $form->createView(),
        ]);
    }
    
    // Affichage d'un produit en fonction du slug
    #[Route('/produit/{slug}', name: 'product')]
    public function show($slug): Response
    {
        $product = $this->em->getRepository(Product::class)->findOneBySlug($slug);
        if (!$product) {
            return $this->redirectToRoute('products');
        }

        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    // Affichage des produits selon categorie VAC
    #[Route('/product/list/{category}', name: 'products_category')]
    public function productsCategory(Int $category): Response
    {
        $products = $this->em->getRepository(Product::class)->findBy([
            'category' => $category]);

            // dump($products);

        // $search = new Search();
        // $form = $this->createForm(SearchVACType::class, $search);
    
        // $form->handleRequest($request);
    
        // if ($form->isSubmitted() && $form->isValid()) {
        //     // $search = $form->getData();  //redondant. Pas besoin car l'objet search est déja lié au formulaire 
        //     $products = $this->em->getRepository(Product::class)->findWithSearchVAC($search);

        //     // dump($products);
        // }

// dd($products);


        if (!$products) {

            return $this->redirectToRoute('home');
        }

        return $this->render('product/productCategory.html.twig', [
            'products' => $products,
            // 'categorie' => $category
            // 'form' => $form->createView()
        ]);
    }

    // Affichage des produits par catégories VAC
    #[Route('/product/list/{category}/{categoryVAC}', name: 'products_categoryVAC')]
    public function productsCategoryVAC(Int $categoryVAC, int $category): Response
    {
        $products = $this->em->getRepository(Product::class)->findByCategoryCategoryVAC($category,$categoryVAC);

        // dd($products);


        if (!$products) {
            return $this->redirectToRoute('home');
        }


        return $this->render('product/productCategoryVAC.html.twig', [
            'products' => $products,
                // 'form' => $form->createView()
        ]);

    }

    // #[Route('/product/list/{category}/{categoryVAC}', name: 'products_categoryVAC')]
    // public function productsCategoryVAC(Int $categoryVAC, int $category): Response
    // {
    //     $products = $this->em->getRepository(Product::class)->findBy(
    //         array('category_id'),
    //         array('id' => 'ASC')
    //     );

    //     if (!$products) {
    //         return $this->redirectToRoute('home');
    //     }

    //     // dump($products);

    //     return $this->render('product/productCategoryVAC.html.twig', [
    //         'products' => $products,
    //             // 'form' => $form->createView()
    //     ]);

    // }
    
}
