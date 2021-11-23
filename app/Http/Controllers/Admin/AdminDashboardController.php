<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Wallet;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Data::all();
        foreach($datas as $data){
            $wallet_amount_stock= Wallet::where('countryname',$data->countryname)->sum('amount_stock');
            Data::where('countryname', $data->countryname)->update(['stock_available' => $data->stock_quantity]);
        }

        $wallets = Wallet::select('user_id','countryname', Wallet::raw('COUNT(*) as `count`'))->groupBy('user_id','countryname')->havingRaw('COUNT(*) > 1')->get();

        foreach($wallets as $wallet){
            $amount_stock  = Wallet::where('user_id',$wallet -> user_id)->where('countryname',$wallet -> countryname)->sum('amount_stock');
            $stock_price  = Wallet::where('user_id',$wallet -> user_id)->where('countryname',$wallet -> countryname)->sum('stock_price');
            $amount_stock_price  = Wallet::where('user_id',$wallet -> user_id)->where('countryname',$wallet -> countryname)->sum('amount_stock_price');
            $wallet_ubdate = Wallet::where('user_id',$wallet -> user_id)->where('countryname',$wallet -> countryname)->update(['amount_stock' => $amount_stock ,'amount_stock_price' => $amount_stock_price]);
            $Wallet_filter = Wallet::all()->where('user_id',$wallet -> user_id)->where('countryname',$wallet -> countryname)->skip(1);
            Wallet::destroy($Wallet_filter);
        }

        $wallets = Wallet::all();
        foreach($wallets as $wallet){
            $data_stock  = Data::where('countryname',$wallet -> countryname)->value('stock_price');
            $wallet_ubdate = Wallet::where('countryname',$wallet -> countryname)->update(['stock_price' => $data_stock]);
            $amount_stock_price = Wallet::where('user_id',$wallet -> user_id)->where('countryname',$wallet -> countryname)->update(['amount_stock_price' => $wallet-> amount_stock * $wallet->stock_price]);
            $data_sold = Wallet::where('countryname',$wallet -> countryname)->count();
            // Data::where('countryname', $wallet->countryname)->update(['stock_sold' => );
            Data::where('countryname',$wallet -> countryname)->update(['stock_sold' => $data_sold]);
        }

        $datas = Data::all();
        foreach($datas as $data){
            $wallet_amount_stock= Wallet::where('countryname',$data->countryname)->sum('amount_stock');
            Data::where('countryname', $data->countryname)->update(['stock_available' => $data->stock_quantity - $wallet_amount_stock]);
        }

        return Inertia::render('Admin/Dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
