<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Product
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('products.index', [
            'name' => 'Iphone 13 Pro Max',
            'image_paths' => [
                'https://cdn.lumen.id/commerce/digimap/file/84417e65-4d7e-4762-86b9-87dbe7a75cf8/PDP-iPhone-13-Pink-1-medium.jpeg',
                'https://awsimages.detik.net.id/community/media/visual/2021/09/23/iphone-13-pro-max_169.jpeg?w=700&q=90',
                'https://awsimages.detik.net.id/community/media/visual/2021/09/23/iphone-13-pro-max-13_169.jpeg?w=620',
                'https://review1st.com/wp-content/uploads/2021/09/iphone-13-EverythingApplePro.jpg',
                'https://cms.dailysocial.id/wp-content/uploads/2021/09/c73bcca06ba96795fd3ade2a33cd23e0_Apple-iPhone-13-Pro-Max.jpg',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjYerq5k6jjKkLfIVHBFv52Gv0HlIDsWkJTg&usqp=CAU',
                'https://i.gadgets360cdn.com/large/iphone_13_pro_hand_side_ndtv_1633420953812.jpg'
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
