@extends('client.layouts.master')
@section('main')
    <div class="px-32">
        <div class="flex justify-center items-center mt-20 mb-20">
            <button class="bg-[#33c1f5] px-4 py-2 text-white font-semibold text-2xl rounded-xl">Corporate About</button>
        </div>
        <div class="mt-20 grid grid-cols-2 gap-5">
            <div class="">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.6550087463115!2d105.66217367499513!3d18.679470964301597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce69d644de3f%3A0xa51ded9cb4e1bac4!2zMjkgxJDGsOG7nW5nIFRyxrDhu51uZyBDaGluaCwgTMOqIEzhu6NpLCBUaMOgbmggcGjhu5EgVmluaCwgTmdo4buHIEFuLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1698740794244!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-3xl"></iframe>
            </div>
            <div class="">
                <div>
                    <h1>About Or Business</h1>
                </div>
                <div>
                    <p>Tradex10 is a cutting-edge business that has harnessed the power of AI technology and expert trading
                        strategies to offer its clients a unique advantage in the market. With a deep understanding of the
                        intricacies of trading, Tradex10 has developed an intelligent trading system that is capable of
                        analyzing market data and making predictions in real-time. This state-of-the-art technology enables
                        the company to make informed trading decisions, maximizing returns and minimizing risks for their
                        clients. Whether you are an experienced trader or just starting out, Tradex10 offers a comprehensive
                        range of services to help you achieve your financial goals. In this rapidly evolving market,
                        Tradex10 stands out as a leader, providing innovative solutions that are tailored to meet the needs
                        of each client.</p>
                </div>
                <div>
                    <div class="mt-2">
                        <i class="fas fa-check mr-2"></i><span>Tradex Group Limited9</span>
                    </div>
                    <div class="mt-2">
                        <i class="fas fa-check mr-2"></i><span>Company number: 1262923</span>
                    </div>
                    <div class="mt-2">
                        <i class="fas fa-check mr-2"></i><span>29 Truong Chinh, Vinh, Nghe An, Viet Nam</span>
                    </div>
                </div>
                <div>
                    <button>Contact US -></button>
                </div>
            </div>

        </div>
        <div class="mt-20"></div>
    </div>
@endsection
