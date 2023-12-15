@extends('client.layouts.master')
@section('main')
    <div class="w-full">
        <div class="mt-20 flex justify-center items-center">
            <button class="bg-[#cc0c39] text-white px-4 py-3 text-xl font-semibold rounded-xl">Frequently Asked
                Questions</button>
        </div>
        <div class="flex justify-center items-center mt-5 text-2xl font-semibold tracking-wide">
            <h1>F.A.Qs</h1>
        </div>
        <div class="flex justify-center items-center mt-10 mb-10">
            <div class="grid grid-row-4 gap-4 w-1/2">
                <div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4 cursor-pointer">
                        <div id="what-tradex" onclick="toggleDiv()">
                            <h1>What is Tradex10? What did we do to make huge profits?</h1>
                        </div>
                    </div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4" id="respone-tradex"
                        style="display: none">
                        <p>Tradex10 company is a crypto and commodities trading company founded by a group of experienced
                            surfers and technology experts. With the combination of these two areas, Tradex10 has developed
                            cutting-edge technologies, including scalping trading bots and artificial intelligence (AI), to
                            create smart and efficient trading strategies. Thanks to the combination of people and
                            technology,
                            Tradex10 is able to trade crypto assets, commodities and currency pairs with high speed and
                            accuracy, thereby bringing profits to its clients. me. Tradex10's team of experts always monitor
                            market trends and use technical analysis tools to make accurate and timely trading decisions.
                            With
                            the commitment to bring the highest benefits to customers, Tradex10 has become one of the most
                            reputable and reliable crypto and commodity trading companies in the market.</p>
                    </div>
                </div>
                <div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4 cursor-pointer">
                        <div id="what-tradex" onclick="toggleDiv2()">
                            <h1>Is Tradex10 a legit company? Information about the company?</h1>
                        </div>
                    </div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4" id="respone2-tradex"
                        style="display: none">
                        <p>Tradex10 is a legal company in New Zealand and is registered as Tradex Group Limited.</p>
                        <p>Company number: 1262923</p>
                        <p>Address: 14 Uretara Drive, Katikati 3129, New Zealand</p>
                        <p>Email: info@tradex10.com</p>
                    </div>
                </div>
                <div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4 cursor-pointer">
                        <div id="what-tradex" onclick="toggleDiv3()">
                            <h1>What is the minium deposit and withdrawal amount at Tradex10?</h1>
                        </div>
                    </div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4" id="respone3-tradex"
                        style="display: none l">
                        <p>Minimum deposit amount: $50</p>
                        <p>Minimum withdrawal amount: $15</p>
                        <p>Maximum deposit and withdrawal amount: unlimited</p>
                        <p>Withdraw via BEP20 networkk 0% fee, TRC20 $1 fee.</p>
                    </div>
                </div>
                <div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4 cursor-pointer">
                        <div id="what-tradex" onclick="toggleDiv4()">
                            <h1>What are the accepted payment gateways at tradex10?</h1>
                        </div>
                    </div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4" id="respone4-tradex"
                        style="display: none">
                        <p class="list-disc">Investors can deposit via: BTC, ETH, USDT, BUSD, BNB, Coinbase, Perfect Money
                        </p>
                        <p>Withdraw via: USDT and BUSD</p>
                    </div>
                </div>
                <div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4 cursor-pointer">
                        <div id="what-tradex" onclick="toggleDiv5()">
                            <h1>What are main wallets, interest wallets and bonus wallets?</h1>
                        </div>
                    </div>
                    <div class="rounded-2xl border-solid border-2 border-gray-300 px-14 py-4" id="respone5-tradex"
                        style="display: none">
                        <p class="list-disc">Main wallet: When investors make a deposit, they will transfer to this wallet
                            or receive a referral bonus from a partner.</p>
                        <p>Interest wallet: Daily profit from fund investment -> can be used to withdraw or reinvest</p>
                        <p>Bonus wallet: Bonus from the event, only used for investment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        let divVisible = false;

        function toggleDiv() {
            if (divVisible) {
                document.getElementById('respone-tradex').style.display = 'none';
            } else {
                document.getElementById('respone-tradex').style.display = 'block';
            }
            divVisible = !divVisible;
        }

        function toggleDiv2() {
            if (divVisible) {
                document.getElementById('respone2-tradex').style.display = 'none';
            } else {
                document.getElementById('respone2-tradex').style.display = 'block';
            }
            divVisible = !divVisible;
        }

        function toggleDiv3() {
            if (divVisible) {
                document.getElementById('respone3-tradex').style.display = 'none';
            } else {
                document.getElementById('respone3-tradex').style.display = 'block';
            }
            divVisible = !divVisible;
        }

        function toggleDiv4() {
            if (divVisible) {
                document.getElementById('respone4-tradex').style.display = 'none';
            } else {
                document.getElementById('respone4-tradex').style.display = 'block';
            }
            divVisible = !divVisible;
        }

        function toggleDiv5() {
            if (divVisible) {
                document.getElementById('respone5-tradex').style.display = 'none';
            } else {
                document.getElementById('respone5-tradex').style.display = 'block';
            }
            divVisible = !divVisible;
        }
    </script>
@endsection
