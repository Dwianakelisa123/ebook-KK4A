<?php


namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = book::all();
        return response()->json([
            "message"=>"load data success",
            "data"=>$data
        ],200);
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
        $tabel = new book();
        $tabel->name = $request->title;
        $tabel->name = $request->description;
        $tabel->name = $request->author;
        $tabel->name = $request->publisher;
        $tabel->name = $request->date_of_issue;
        $tabel->book();

        return response()->json([
            "message"=>"store success",
            "data"=>$tabel
        ],201);
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
        $tabel = book::find($id);
        if($tabel){
            $tabel->title = $request->title ? $request->title : $tabel->title;
            $tabel->description = $request->description ? $request->description : $tabel->description;
            $tabel->author = $request->author ? $request->author : $tabel->author;
            $tabel->publisher = $request->publisher ? $request->publisher : $tabel->publisher;
            $tabel->date_of_issue = $request->date_of_issue ? $request->date_of_issue : $tabel->date_of_issue;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabel = book::find($id);
        if($tabel){
            $tabel->delete();
            return ["message"=>"delete succsess"];
        }else{
            return["message"=>"data not found"];
        }
    }
}
