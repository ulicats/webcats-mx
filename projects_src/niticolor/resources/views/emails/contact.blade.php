<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

		<style type="text/css">
		body{
			font-size: 0.95rem;
			background-color: #e9eaea;
		}
		body,html,*{
			color: #3e3e3e;
			font-family: 'Montserrat', sans-serif;
		}

		._title{
			margin-bottom: 2px;
			font-weight: 300;
		}

		.bar{
			margin: 0px auto;
			width: 672px;
			max-width: 100%;
			padding: 11px 15px;
			margin-bottom: 0px;
			background-color: #d7dada;
		}

		.header{
			margin: 25px auto 0 auto;
			width: 702px;
			max-width: 100%;
			padding: 11px 0px;
			margin-bottom: 0px;
			text-align: center;
			/* background-color: #222324; */
		}

		.header .logo{
			width: 250px;
			max-width: 94%;
		}

		.container{
			/* display: inline-block; */
			margin: 0 auto 0 auto;
			width: 700px;
			max-width: 100%;
			padding: 0px;
			border: 1px solid #d7dada;
			background-color: #fff;
			/* border-radius: 4px; */
			overflow: hidden;
		}

		.body-content{
			display: inline-block;
			width: 100%;
			padding: 18px;
		}

		table{
			border-collapse: collapse;
			width: 100%;
		}
		table td, table th{
			margin: 0;
			padding: 0;
		}
		.td-label{
			width: 185px;
		}

		.footer{
			display: inline-block;
			padding: 18px;
			width: 100%;
			font-weight: 600;
			text-align: center;
		}
		</style>
	</head>
	<body>

		<div class="header">
			<a href="#">
				<img class="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAAA4CAYAAABHTcVMAAAawklEQVR42u2deZxcRbXHv9U9M8lMJhsh6ZD0QII8ZQmECAooCsiajgiiuID6VGRTBEQQeYAiiqAoCQ99yKIiIAqIIjgdIAn7EkkAkX0JWaYzSU9CNrLM2uf9cU4znaHv7e32MDL3fD79yWfSt29Vnar61dnLEdJ/BIkIwPbAicCuQBdwL3Cbc27Tu9ivBuAo+9QBbwDXAa8458KJK42XI4H7gA97PHIvcLRzrn2w8qgmyJdNSN/jImQaHMSBnYFdbJNF8zy+FnhZ4GVgEU7WpMbN6AmXrSdYTQF+Beyfw89PAnuJyPnOufXvQr8agR8CJwEj7L8zwEHAaSLyRAhaIQ0owJrYlnROGOXgY5A5xEBqF2Csnbh+1OPgLWAp4p5rSicXCMzG8UZqXCIEr14aCVwGfBzIRYBhwAnAYhGZ6ZzL9DOIHgF8E2jI+SoCfBD4EXAcsDqcvpCCorKPv4ltsyNO5H0OjgcOAfa0DVQJ9QBLgYeA2wUeTMUSW0IJS6YA84BxHo88CMxwzm32UTW+Bozy+P1Tzrm7S+xTHXAzcKzHI+3A50p9b6gShiphoBLWxHTSOdjBiZwEfAbYyU7VICgK7GifYxzMbUonrxe4PxVLdA7itTyqwGFQD9QW+P2ZwA4e318LlAosQ4GmAt+PD2EopCCpJKBpSicbIvANB3cC5wLvDxCs8qlBnwFudjArnk7uOKFt9mA1iKwFNvp8vwU1wvcntZs07Nen1nCLhdTvgNXU1kw8nZwEXAnMAqZWEaj60hjgZAe3RkU+FU8nawbhPLUA8wHxAI477d/+pE7gVsDLQ/kQ8ES4xULqV8CamE46xO3v4Bbg62xtYO3Pfu4NXOfg7Hg6OWyQzdMG4HwDgVxnxCbgauD3/WlwBzDv3xzgCutfljLAAuACYE24xUIKknyllXg6GXEwA/gl8F8DoL9jgQsdjG9KJy9qiSXWDYZJcs4hIi+gDo4jUBvfZuA5YJ6Xsb0f+rVRRC4FHkWdLiOAJcADwKIwpCGkfgMsA6ujgZloLNVAoQbgFKC2KZ08fzCBFmoT+t0A69cW1LN1X7idQnpXVMJ4utk5+IRJVtsPwH4PQeOPLoynk43hNIYU0mCVsJwD3K4mWU0awH0fApzqYEU8nZyViiW6B0KnRKTG+jYUDZwV1GPWCXQ658KA2NL4CRqyUWv8HGoHbTfqaOg2vnZXsQ9Rm9MaNIQkitoSt/RH+1XiaY3xM3dMuTztAHreTbU+z9zXvAOw4iubRzm4CNgtwLa7jAFbbAPX2wKoq/C99cB3HTwbb0vOTY1LSECMGo2mwHjFNj3nnHst53mHhmF8DPgsMBloNPU1g0bzbwaeF5G/oUbpjc45KbI/DWiUu5fDIw08kTW8i0gM2JfeFJ5t8XeWTBaRYwp0Y7Fz7pnsH9FolO7u7mxWQz7qAB4tJ2XIFuoQNM7rE8DBwHYGVo02ri401KMDSInIg2gA7VIDkEo3Sh0wweb0YDu8hwDDbV1027x2AC0iMg94GEgBHQPNfmdjGoqmzX0cTZ9qsv8bbsCV5Wk7ZosUkYeB5eXyVESaUIdZvh9ngCedc619fhOxNXswcKT1eSgwZKuXxNuSESeci+aHDamUR6j3aB5wO9Ai+rc4ZdB41EY23TpXyQw/KnBsKpZYGdDkfghIGgjlo3OdczPt2aFoTt8ZwDQKR/uvBxai3rW5zrnOIvqzPXC/j3p+H/DZbAS0iBwG/MUmGeNt1IfHGbb2Puaj651z38z+0dDQwKZNmy4ELvR4fjVwuHPuuRI3Vb0dFicDe9liLSaUpdvA4kk0EPaxUiPCc9rfB82P/BAabFtbZPstwFPA71GP7qZSNnk1It1tTA0GvCeWyNMuOwAWogntj5fB0+OA35I/n7gLON45d2fO843AF1A79ZS+OFSTqwo6YS+bqErBqgd4BPiJwPxULLEpv60smXQa03U2vdn+5dC+Ds6Mp5MXBKQauhxRNK/tzzlHJpMZg4Yb+KW99KWRdnJMBa4SkV8WUW3B2VzVFqnaF+r/O8ZD4RCXqMf/ebVRW8ohZKfqrmg4xGHA6DLMG5PsczDQbB7MV4qRZHPaPx84FI3/K7X9yfY51KS9y0RkwbtlBjBVdhrwfePJqBJfUYtmsuxkY5ojIj8Hni0hjCZi74n6fJ8F1gnApaalNHg+bKpgHXAq3ukbxVI38CfgyxmY5wVWAKlYoqNl/IwnRdF0pqmM5drijgOmjFz7QL8shkwms61JSaeVsRCyatr3gXNMShvMdqo6m787gM+VAVZ9aQzwZZMyP2V2Rb/2hwD/be1/vgywyncoHQX8GTjZVPr+5mm9rc07gGPKXKN9efp5e99JxrMgaQLwazR0p8EP/SASwcEBxmQXAFid1RJLpJbHErnSVLQpnWxoSicb4ulkbQ5nScUSawR+AlxfhGriRXEHZwzv3FLXD+uh3iSB40qQYrze8x3gSLODDVawOgO4Ck31CooPzuywvwG+4gVaIjLM1NpZAbePHf4/B34sIqP6kacjgZ+ie2r7gHk6GfiZHbQNAfW3EbWbH+kjifUCVnzlP7ISyjYBgNV3W2KJVTlAVduUTu7n4P+A2cA9Dm5oSicPiaeTQ3KkrY2ijHi6AmYeYouu2jQDjfoPIk1ohG2YSYMQrGqAb5kaVq0NPR64BNgvT/sNdvCcRW89r6BpmEk6PxKR4f3A0wZbT6egDopq0AjgPOBsk+QqBcGjTLKKFqNK4YTdTEcNGqyGOPi2LYjt+vzmCAfXxtPJS1OxxAYAcbQ64TfAHmXa0SY4+Eo8nfx+KpaoZqrKPnlOrU7Uu7LJvmugcBWFLO0CHC4i1xTrOSyksaJeyUzOohjqc9J2W//9qDPgjZVdqP+Dt3Mjdzxvod6qVtRYOxI1Ho8tMDYBngUW57HvnICuz0Kbrgf1nrUCK810MRyYCMRsrv2kmDrUNtwiIlc657qqBFZRG88p9Dpc/MaU5elKm98ROTytLzCmBuAcIC0i11dgp5ts6nhR0lrNxHQS4NN5AKUUsLoNOCcPWJ0G/MAmN8skMaDcBviOg1XxdPOsVGxGZvm4hMTTyWYHrxholUoR4EBbzGurCFi5E7kJmAvcaJO/3r4fCbzPNsVH8Xco1NgJc2tA/V4IfIpeG2UMrVYa83g+CfyiwDtXBsY89ZztaGtjW789CCwzU8Fc1NW+3gCsDq0PtqOt32PNzuL6/P5xtLROKmdjg3rizsHfq9sDvG7tP4p6zNbb/9da3yebxP0l64/XJh8KfA94RkTmBR32YGM61MZaaEwvop7UJ21MG3J4OtZ4enSOPc+rs40mob4kIg+XMSZnvNulwBrozJqKapwObh/Kq76QBauzWmKJdB6w+mEOWC0zO0WrbeKDTIr6lsMl0VLJ2IZdXCZgAezs1DNyfz9oNSnUcH4X8FbfCROR+aib+hR7zu8UmYJ6YxYEAAhrgcdy+rED/tUcVjrnHukvVTCTydSh5YmmFFhbs8228a88XqkOkxAWWazQLbZ5DslRLZ41dezlPnMz3CQ7v3peW9DwhFloXmS+9jcCS0TkUTR05weoh9PLVDDW1LXn0di5IGmMAbBfDbKNqGnmamBpHmk+y9M3jKe32R4+0Acf4qgd9lkD81IoytYlv3NBahPwb9s/Cw1UiaC11/esMlgtAk4UxxWdde4Ws1tkAy8nofEu2tMInaiEVS4NB2ZMbEtWu/zNajvN/uyceyvf6eKcwzm3Ck1xuiFHRctH9T4S0HuGjE97moE14iMF3IrGDT1dyIXunOswCehrxudO4FUDq2dz58ZU0Rm2Cf3A6jLge86514povysSifwT+IYBp596tJ+p/4GJWCZdfck2vxdtMrC8yDm3pJDpweIDHzae3lZg7R4BTLd+lCph1eQxPdyDejaPBC52zjU75x5xzj0ScTpxY8sAq1vzgFW92axywep14FSBOalxiUx69HRExdDFOWrc2zaE1olHQeVlSaZFhGqGCmRsYd5VjO5u1RR+CbxQwM6x03sdsDKZTC0aFBrzUQEeB85zzqWLVTOcc0QikRWmdl0KnI4GOvbdRdk6+I0+YHkjcEUptxGJSLb9c4Fm8tcuy7VnjQ6QrdugxS7rfPbrVcB1lqxeNE+dc8tMO3jQ59GhwBdz9ny5tA74MfAVYI5zbk3f+YuYdBMt8cUvA+flAavTTYTPlaxOFZibimnajJVY3gvYPWfzv23Q3a717xRhhC1EMame1wdgFfDbEo2ni9HoZ7/TJs57n2LAR3zsIqtRr2FLOZKGc24N6hWc03exG/hNRS/J8KJXgZ855zaW0340Gl0JXIx/NdZdgQ8EwcxIJIJJi3v7PPY08KsKroNbioZIrPJ5plAfCtFG9OKSnzvnVnsdVJECRk8vapGczsfTyaEmWV2YY/BbhAai3t8HrPY2tJ+QFapE0xm0Qz3UBjCZ413v+6tBS8wmV7yyHo2KqS1+IPeerjxhm2s/1FDtRQ8ACysxSjvnuvKpcZlMJoIak0f7SCLXFgCbQhIkwDPAX32krFFAIgi1sKenx6FR7F6ezk56bceVqPGPopEAXjQCmFqGWpgVWm4FrimUqhYpsHg8TwgHUya2zY7G08lGs1ldkAes5rVYeEEWrJwuiD1zFsj14F7qM/BJFc5jY5WllefZuspmsQv5NdSo6SdlvWepp6cnYptriI+d5QbKz3goRENQ6d6LzyuB5kqrt0YikewGXO0zzwcEoEKBOnL8vGwrgPmVhsuYNpHEuyQ2JjmXE7j9CnBpMepqTRn2K1Dvyp8i6kmYwNaVBEoBqz8K/DoVm96tzzU7p16enSucxFqqe2PL0jIX9foqbsb/BBqCf2DvauClKlY6aMQ/7WYJAXjvTMp43iStwzwei5vpY0OFzY1Hw2e8aGGp2kAB1fJV1Aufj3Yx6bGtFHahNr8lxTxcU6YaEqE3KTKXSgGrWwS+l4olVvceO24M77yYs6wDgWCNmn2p3JLE3fYZrBTFPyB4FaW7xkuhMQUO6OcLSMClrpGlBfZeEJkS2+GfobKA4IJ+16DhC16Ata19SgGsVainvadY4AnqOGtF7VjFgNUdAuekYom2HDvYEKdhAvsG1J96QhpoNBT/oMZ0BYdBMTSiwGG4NKBMA0aNGgX+V7MNofKLhzGw8lLDeoCWoCTWhoaGHuCNAnuuVAFokUltRVGNiWSVjqgTmJWB+5ZvDVZTHVyTB6zOzANWpxngBZW8HFb2HHhUU2B+O/GP96mU6gpINYGlzHR3dxcCrGJK+hTLU786Zx0Bj2lzAQm61GIAKUq4oi5CMPfZvShw8/JYogdgu7Z7cLCH06Jf+cBqZR6wupDeUIR1aPxWawULeG2IDwOOugpsoMaA1CQv6iigko8o08v1DqqtrQV/o3ox+ZvF8lR8AGRkUMyr0QLFwwr0pVQ8ebGUgyJC5UGaPcBN5OSaRSWzvdPctaxHphiwyjJ2GXCCaFzHEag7tRxbUVuIDwOOOvD3Mm1HMJ4zL9pQoP33BwWYa9eupYB61BmQsPCmzyEQAXYOKqp+8+bNUfwN/BtN2CiWMqaGF/2DCJV7EN4E5rwda9WWdE6TJvcrE6xOFfh7KpZY3hPhObSeUami+hY0ETmkgUU9BSSs0UFKBHlodYGDbAqVF+/L0jD8i2FuCUhdW2F70Iv2Jbgg6m3wz/Fdjncoh9d6KMlLGqHyLPzN5Hh2nDAaLXGajZ6/Ow9Y1ZuBPReslgCnC9ybMtUykpFsmZZST4g2KSNSOqR+kbD80pPGAQdUsZjhZvyjtScSQD01kxh2x9ubllWFgrgZeyX+ube7o5H1QdAH8b9QeSGle1lL0sEjqIW+EsW9U3LsAk5ReKL92Q78Lg9YnYwGmuaC1bcF7s6CVTyddA43FZXCShXTV7jwmvQBRxZQeR/ehttaNNl2myp1oR3NUxQfCe/ESovSZTKZKJpbN8bHZNEckIS1BXjJ5/uRwDFW2bVsst/PwNuGlQGeqjTothjAmkdlsSd9b2PpyNHNI8DwCW3NfcHq4hz9PgtWyWzRvbh5GNFwiKll9GmxBGMfGCwU7Y8SzWbQXoA6VLxoGvBpK0ZXbjtD85UktpCFu/APDp1RiZQXjUZB08/8yo2vAB4KItzA0p3u8dnDDvgq8JFyHQr2u/0NhL2oBZhf9UNPNBr3xQreUedyggEtxzCbG1gHnBYVd3BTOrm307o5F9NrWC0EVnuXoQ52Asm36uq7QxwqmsZSWW36UuhNNAnc6ySuR5OfP1wOaFh98LPQG4ny1bt6KWd9etlpLgN2KXWDO+fo7u7eDq2LtYOPCvQAOQUFAzgEHi8AFtvavptUJmhNMo3IL+/4TnpLRlUPsDLOvUllReO2ka312nbRe8jW2d/72WDuY+tKDtUAK4AlAo+tH31QCEO91IN/XNpu9FOliEgkkk0w9tuwO6BF5va167eK2rh2geyP6b0gZGYe0Npi7a/zed0ewJXArsWCpoiQyWSagMuBw30eXYdWMA1SA3gLvaHHL+3ro2gxwp1KGZOI7IiWRjqggB3ttv64zizSqt695grUwmEOjsteKJHSm3IeQi+UWGeg02j2gewpvrgvWE1oa8apgbASsAI1/KVDjHrHJn2rAEB8TURG5Z7AtmCHiMjuIhJIrS57/8toUbhuHzVmD+Bm4HgR2cZLMrA+NqLlgW9EbZ71Zo74NDBLRHbI/t7UsLloNVPxaf8TaHWCo/vyJU8fGuz5G9FLQKM+dp4/AguCzJe0d91uqqGf+edItI5bQkSGF8HTI2wOjsa/2GK23HLVqQYRBB5zKlYeXuZ7DnMwLZ5Ozk/FEqRiiY54OjnTaRj/yWhFiAbUEP5vYKbAglywioqbgpZvrQSs1gvckHHSGWLUVrTRJJqpnutAy+tOA+4QkeWmzk+2k/Uj6HVVswLaYN0icgXqct/fBzR2RDMl/gncJCIvo27zzagZYlv0GqsvoEnzI/Js0qNtfN8SkZRt7s1ofadpeCfaRww0bzKV62YReb1P+2NMMv287Z1CIRnPAFeWentyCVLW5Wig9mSfMX3IgPgh4BYRWYKacdoN6LM8/SJaxrxQSMQjaGHA7v4BLCDjZGNU3B1osGY5t9XE0BCFr9rgScUSHRPTs293SLNTG0mDaPT5mq4615EePZ0+YPUb/Au7FUPzgSdax80IIWpr6sA/Bwyb9xl2qnbZPNTlzEc04D6tMFvVTbZB8LFpHWjA1m4bc4v1bQSan1hXQLKYbiriL4CMcw4ReQmtjHs1/l7JYSa9HZQjqbZbm8Otf8V44FrsUFhUjQm2Mf3TgPjyAmMaDnzSQLYdjYVqN16OsLVQzJhesTlMVWNMdg1co/Wt3TmngNU6bgbxdPIO14uqJfMLONTBT5vSyfM21NWvXj/6IJbHpmeLyeeNLp7YliQi7GGSVaVgtR64OlNGpcj3OkWjUXp6eh5ASwMXqoQRrQI4eW2wR9GSxjMpfGtTdvGWmlybQS8k+TM5hn7nnIjI3+ywvZjC9yLW2EYvJxI/hV4W+3BQydUePM2IyE0m+V1QhHRUa59yxvQG6tx4ohrlgERktEmLQ03tfE1ElrytlwqyxnTRcuvz1KL3i109onPLnhPbkr6LPp5ONkSEGab3VwpWAswRmNM6bnqIUH13rBYPnIdeKjBgyGJ2/oIGES+uQhNdwN/RW4uW9d1YVpTuGuDsKkkJgnolT6HI+v8B8LQL+F/UwdVWpTG9iNalv6caAGwhLTvb4bSr/TsBGPt2QOby2Azi6eSdVkDv62UCSC1628U+EeH3TenkvaJIvE6QHoerA8Y5jSY+Hr07L4hUjGXApVLd0iT/6bTBVKLd8L/eqr9Bq0dE/oKmdVxih1cQIRZvot7qywHPGuHOuU4RucEkhovRK++CaL8dDV84D3iu2gGVfcbUISJXoWEGF6A5vUHkSG5CnRU/Al6oorSYlWRrbd2ORWP3tt9qEKnxM9rjK5svd2qYK/dewIhtiAuAM53q7i0O125i9w5olcShBFOLaxNwpTieXT4uEcKSvwr2gInxl6ChKMXyfwtVzBwwVeZx4HOok+Y46185qulm1FP8C+DeQjXCc0DzQTSl7CTUiP+BMtvvRNOPfod6BNdWsYKq35i6RaQZrRJ6uo1tUpljakedZdeipZ83VnlM7aa+r0UdRiMNcDfU9JHFQFN1fmCdG1dBoxHToXezTzWoB61cel1qXKInYIa97qPbl1u6pstUH6+UjHSZv0tRRHqVAcNfTU35BipNv8/j8OhEy/vMB/6BRojniu2gHrNXfXjUUcIGE6BNRC5BDfHHoh7Kve2EjRQAiRTqTbwLuBdYV4oEYM+mrf0/oNdmHWjtj6NwHa0WNJ5xLnA3sKoMqSpj2sKoSua5z5haReQCtNRTlqfTUG+gH3h1WHvzjZ+zgTfLkKo2mKSXb/66yR9u0278HIvGeK21vr6RFybjbckaJ5xhwFXN67Iq1aXnAF9viSUCrcwgIrWo4dJrk2wo8xqoqL3Xa/Fvcs6tL+N37XaSSwl9iZikO5XewNF6W6itaKzUc2b76consWUyGT8jdMYWeFeZc4D15/3otfK7o96rbGnh9hzV7yk0ZGBZUO51a3+oAfpexqdG2zh11r6Y5Pm09aGl3PHmzIlfBdGS5znPmBrQ0ubZMWVj1ups7oXebJV/2Zi6KxhTvQGw89jDa/OFeVhfx9oafcv60eMp19nVXeeZCtE4AMHqceCEHievhGEMg4csStth4QmDrf3BPibf3lmy8rloDuBAkbQyqLfrNIEXLLI+pJBCGgRUEE6t0N4p6HXV49/l/nYBdwmcm3GyKJSsQgopBKx8oBV1Ghl7kem974bcuBa4XuBnqVjizXDqQgopBCxPsqj0D6CRyZ/tRxUxAywQjae5OxVLhHmCIYUUAlZxZMb4T6LxKh9DPSnVIEFd+bcKXJ1xtLSGcVYhhRQCVhmgBTDKaSb8MQZcowLqUxcaJ3SvwB8EXsredRhSSCGFgFU2xdbOprZTGoB9ndba2RvN/Rld4rvb0YC5hcADokFqK1IhUIUUUkhBAVYuTWhLuogwyorwHYj+OxJNxRmNlulwaFTyBjR3LI0GKT4sWgBsWSqWCEsbhxRSSHnp/wHMlZABi4ESEAAAAABJRU5ErkJggg==" />
			</a>
		</div>

		<!-- <div class="bar"></div> -->

		<div class="container">
			<div class="body-content">
				<h1 class="_title" style="margin: 0 0 13px 0; text-align:center;">Formulario de contacto</h1>

				<table id="mail" style="width: 100%;">
					<tr>
						<td class="body">
							<table style="width: 100%;">
								<tr>
									<td class="td-label"><b>Servicio / Producto: </b></td>
									<td>{!! $contactType !!}</td>
								</tr>
								<tr>
									<td class="td-label"><b>Hora de llamada:  </b></td>
									<td>{!! $contactTypel !!}</td>
								</tr>
								<tr>
									<td class="td-label"><b>Fecha: </b></td>
									<td>{!! $date !!}</td>
								</tr>
                <tr>
                  <td class="td-label"><b>Nombre: </b></td>
                  <td>{!! $name !!}</td>
                </tr>
								<tr>
									<td class="td-label"><b>Teléfono: </b></td>
									<td>{!! $phone !!}</td>
								</tr>
								<tr>
									<td class="td-label"><b>Email: </b></td>
									<td>{!! $email !!}</td>
								</tr>



							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="bar" style="text-align: center;">Webcats.mx</div>

		<!-- <div class="footer">
			Padel+
		</div> -->

	</body>
</html>
