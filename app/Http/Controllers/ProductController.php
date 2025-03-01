<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::whereSlug($slug)->first();
        $fetchedProductIds = [$product->id];
        $relatedProducts = Product::with('gallery:id,name,image')
            ->where('subcategory_id', $product->subcategory_id)
            ->whereNotIn('id', $fetchedProductIds)
            ->latest()
            ->limit(4)
            ->get(['id', 'name', 'slug', 'gallery_id']);
        $fetchedProductIds = array_merge($fetchedProductIds, $relatedProducts->pluck('id')->toArray());

        // If less than 5 products in the same subcategory, fetch from the same category
        if (count($fetchedProductIds) < 5) {
            $categoryProducts = Product::with('gallery:id,name,image')
                ->where('category_id', $product->category_id)
                ->whereNotIn('id', $fetchedProductIds)
                ->latest()
                ->limit(5 - count($fetchedProductIds))
                ->get(['id', 'name', 'slug', 'gallery_id']);
            $relatedProducts = $relatedProducts->merge($categoryProducts);
            $fetchedProductIds = array_merge($fetchedProductIds, $categoryProducts->pluck('id')->toArray());
        }

        // If less than 5 products in the same category, fetch any product
        if (count($fetchedProductIds) < 5) {
            $anyProducts = Product::with('gallery:id,name,image')
                ->whereNotIn('id', $fetchedProductIds)
                ->latest()
                ->limit(5 - count($fetchedProductIds))
                ->get(['id', 'name', 'slug', 'gallery_id']);
            $relatedProducts = $relatedProducts->merge($anyProducts);
        }

        return view('pages.product', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }
}
