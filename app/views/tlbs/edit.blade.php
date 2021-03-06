@extends('layouts.member')
@section('content')
<br/>

<div class="row">
  <div class="col-lg-12">
  <h3>Tlb Payment</h3>

<hr>
</div>  
</div>


<div class="row">
  <div class="col-lg-5">

    
    
     @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif

     <form method="POST" action="{{{ URL::to('tlbpayments/update/'.$tlb->id) }}}" accept-charset="UTF-8">
   
    <fieldset>

    

        <div class="form-group">
                        <label for="username">Amount</label>
                        <input class="form-control" placeholder="" type="text" name="amount" id="amount" value="{{$tlb->amount}}">
                    </div>


        <div class="form-group">
                        <label for="username">Date <span style="color:red">*</span></label>
                        <div class="right-inner-addon ">
                        <i class="glyphicon glyphicon-calendar"></i>
                        <input required class="form-control datepicker" readonly="readonly" placeholder="" type="text" name="date" id="date" value="{{$tlb->date}}">
                    </div>
       </div>

            <div class="form-group">
            <label for="username">Equity Account <span style="color:red">*</span> </label>
            <select  required class="form-control" name="eq_id" id="account">
            <option> select account</option>
              @foreach($equities as $account)  
                    <option value="{{$account->id}}"<?= ($tlb->account_id==$account->id)?'selected="selected"':''; ?>>{{$account->name}}</option>
              @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="username">Asset Account <span style="color:red">*</span> </label>
            <select  required class="form-control" name="asset_id" id="account">
            <option> select account</option>
              @foreach($asset as $account)  
                    <option value="{{$account->id}}"<?= ($tlb->asset_id==$account->id)?'selected="selected"':''; ?>>{{$account->name}}</option>
              @endforeach
            </select>
        </div>

        <div class="form-actions form-group">
        
          <button type="submit" class="btn btn-primary btn-sm">Create TLB Payment</button>
        </div>

    </fieldset>
</form>
    

  </div>

</div>



@stop