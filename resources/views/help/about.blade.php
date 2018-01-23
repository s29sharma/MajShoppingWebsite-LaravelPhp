@extends('layouts.master')
@section('content')

<style>
    row.no-margin {
        margin: 0 ! important;
    }

</style>
<div class="container">

    <div class="row" style="margin:20px 0 120px; justify-content: center">

        <div class="col-sm-10">
            <div class="card card-info" >
                <img class="card-img-top mx-auto d-block" src="{{ URL::asset('images/abtUs.png') }}" alt="" width="1100px">
                <div class="card-block">
                    <h4 class="card-title">About us</h4>
                    <p class="card-text">The way things are going, there is a good chance that in the time you take to read this article, a dozen ecommerce businesses would have been launched. But the more interesting fact is that, quite likely, another dozen would have come crashing down. On the one hand this upheaval has become commonplace. On the other, it has become imperative that as an industry ecommerce introspects. To be taken seriously, any industry needs to mature; it needs to come of age.</p>
                    <p class="card-text"> Though there are several serious players in ecommerce, there still exists a great need to have a greater number of ecommerce success stories. And that will happen only when players get the basics right.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="row" style="margin-bottom: 150px; justify-content: center">

        <div class="col-sm-10">
            <div class="card  card-info">
                <img class="card-img-top mx-auto d-block" src="{{ URL::asset('images/v.jpg') }}" alt="" width="1100px">
                <div class="card-block">
                    <h4 class="card-title">Our Vision</h4>
                    <p class="card-text">A vision statement is a company's road map, indicating both what the company wants to become and guiding transformational initiatives by setting a defined direction for the company's growth. Vision statements undergo minimal revisions during the life of a business, unlike operational goals which may be updated from year-to-year. Vision statements can range in length from short sentences to multiple pages. Vision statements are also formally written and referenced in company documents rather than, for example, general principles informally articulated by senior management.[3]

                        The definition of a vision statement according to BusinessDictionary is "An aspirational description of what an organisation would like to achieve or accomplish in the mid-term or long-term future. It is intended to serve as a clear guide for choosing current and future courses of action."</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="row" style="margin-bottom: 150px; justify-content: center">

        <div class="col-sm-10">
            <div class="card card-info">
                <img class="card-img-top mx-auto d-block" src="{{ URL::asset('images/q1.jpg') }}" alt="" width="1100px">
                <div class="card-block">
                    <h4 class="card-title">Our Quality</h4>
                    <p class="card-text">We can define the term “quality” in many ways, but the ISO family of standards gives a very concise definition: “quality - the degree to which a set of inherent characteristics fulfils requirements.” .
                        This definition gives a general sense of "quality", but we can watch at The Chartered Quality Institute (thecqi.org) which gives the following definition: “an outcome – a characteristic of a product or service provided to a customer, and the hallmark of an organization which has satisfied all of its stakeholders.” </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="row" style="justify-content: center">

        <div class="col-sm-10" style="margin-bottom: 150px">
            <div class="card card-info">
                <img class="card-img-top mx-auto d-block" src="{{ URL::asset('images/aboutUS.jpg') }}" alt="" width="1100px">
                <div class="card-block">
                    <h4 class="card-title">Our History</h4>
                    <p class="card-text">Since earliest times humanity has endeavoured to develop the most appropriate systems of organization to meet the challenges of a particular era. Inevitably the systems of organization that developed were reflections of the wider values, tradition and general organization of society at that time, moulded by the necessity of withstanding threat and seeking to innovate whilst maximising benefits from existing resources. Human development has continually necessitated a corollary of human and organizational development designed to maximize effectiveness. This progression is indicative of a civilizing process that has continually asked humanity to reassess its relationship with itself and to increasingly value the welfare of both the individual and wider society as a whole.[1] The symbiotic relationship between strategic leadership and organizational structure necessary to success can be traced back to the beginnings of western civilization. Indeed, the very term strategic owes its etymology to the ancient Greek words for 'army' or a 'large body' and a 'leader'. In ancient Greece the 'Strategikos' was the leader of the army.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>

        </div>
    </div>


</div>

    @endsection