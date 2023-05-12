<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background:url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGBgaGhoeHBoYGhgYGhocHBgZGhoaGhgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjQrISs0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAACAwABBAUGB//EADgQAAICAQMCBAUCBQMDBQAAAAECABEDEiExBEEFUWGREyJxgaEGMhRSscHwQtHhM3LxByNikqL/xAAZAQEBAQEBAQAAAAAAAAAAAAAAAQIDBAX/xAAhEQEBAQEAAwEBAQADAQAAAAAAAQIREiExA1FBImFxE//aAAwDAQACEQMRAD8A+QySxIovaVEkElSCBbD1uVUkJR/nlAGEcbaQ2k6SSAaNEjkA8Eix7yiIRzNpCajpBsLZ0gkUWC8XXeAIhLBEZW0sCzDcJS6S16fn1AABtR/aQd106ea3uCRKqQQRwYbUKP8AWBNHU4lQrpyBwUViVDDQxG6G+Sp2sWDLAfTY1dwHcIpO7kMQOeQu/tF6oKH0klZHcaljkUDuPpZG3+dplMNHllWxuQ95ZPfmZ1f2/wB46rE6Sudgw8O4kHvK+JvNTTPi2KZYaIGSXr7ztNs8aHzM1amJoACyTQHCi+ALO0gc3czBu8243x/DYMH+JqXQQV0ad9eoHfVxVTWd9S5CTKJgXJrm7U8VdS9RHWeM5H6ZOmOnQjlxSjXqYEG27jc7f7Ck9Rn3+kwu9zxftvyrtjPI3dXn6Y9PiXGjr1AL/GdmtHBPyBFvahXYcd+ZzVI3sdtt6o2Nz57WK9Y3qWUtaLoWl21FtwoBNnzNmu11EThXVaLZr+uw947pM5R0cBWKMrAOAyEqQQGU/uXbcRAEswGdRlLuzkAFmZiFAVQWJNKo4G+w7SlqAK78ekJT5SwdLwrrxhyo+kMEdXo/6tLA6T6bT13jn66XqMmsYUAChfmAc7En92n1nz5pcs1YxcS/SxLYbyo11FAzLZchU1cPT6wim1XLwKqVHDH6yvhGOUKj+n6ZnDla+RCzWQvyirqzud+BvBGBjxKOIxwAIyo1unGla1Ft9QIFAbadJvfvf2lHC3lHKnSysa2L8iNwdOb34nv+o/SmFegTqRktqBI20nUa0DuCP7Tec/3/AMY1vj5wy1KM158YuKKbSXLUpaCXK0VDKbSBYjESz9YT4QDQYNsNxdbgEjfuCSD9J0/AvDfjZkxk6dbhQxugSav/AIms57U1rk65iCaTku7IFD3qhW3f1nqf1r+mF6RlCvqVwSLFMKNG6+s8aWHqZfk9fKzL5HY85UgrVg2LAIsbjY7H6SlNm+8Wz7xy42ABKnS3BIIBrmj3qJWrAl5oChX0uaAIDFSHoXuRRpveZHG8cibSy1LINPx/lRytM3b0m3F1mL4Pw2x05yBzmBJYJp0lAnB3+a79Jqa4zZ0BfaJ8Q1o5R1ZGX9ysCrDawCDuNiDE5sgtlQkrZ0kiiRexIvbatojJlbI9u5LMRqdyTzQ1MxskAfgSa/S2cXOeFO8B2FmhQ7DmvvJk2JFg0SLHBo8j0MCcbXV1eg8DyZenzdQpQJg06wzUx1caV7/j0uI8PfRqyg4yUoDHkGvXrV1LKh2OnnfglTvMVyhILG0qaGxoMYbXeTWQcek0ECgh9fBJOoaa7X3mcQLkEtoMAy1yUZaxwxyydGYCPRLQ+hB99j/aCiTueCdemNMqNhTJ8RNIZxuh/mX13/AlzGdXkcTRtK0TX8M+UtMRM14nkyFZVTU2LeQYfSTxp5RkqXU0lOdouvSTxXpaMYQc+csiV5iEOXOe35mr+NbQRZrmu3t9JhhtjcKHKMEYkBip0kgbgNVEjym5qxm5lC2QwQ8FYREy0geRnk+kBxIDGQ/T1j06thW52NgWdiasj12HsJkUb7+8viWasLJXS6/xJ8lM7s5qrZix2PFmYS8Wm+3r39docXVvsmZPUMXzFTrdX49lydNi6Zivw8RJSlprNjdu4+Y++9zk5soYkhQt9gNhsB/zKVtt49Jw/IhoE8TT0uDWrlnVNCF1D2C9EAJj/mY2SPoZtz+PZc3SJ0i4gVwlnLopL6RqJZq4UazZ+lzl9R1z5NHxHLfDRcaXXyot6UFDgWfea6nCdfrUzO+5hu3rFOZm1qRYyRTSyYJMza0qWJUuQN6bA7uqIpd2ICqoJZiewA5iyvbvLxuykMpKsNwVJBB8wRuIMCVLlSwIEAhqD27yKs0BJqQLwp5x5qVmc2b3JiZfjLRiSbcPTkLqo6brV2s2avz2PtAx45oVJ6MY/wBct6TJiKmj6H7EWPwZFSd3rvDi+LBlUfuUo3/ch291b8TJ0nhhd1RnVAb+d7CjbvO0z664T9J8t9uSyQamt8RuvWr7fW/KH1/QHFkKOyEirZGDrTAHYjnY8TFz7dJpzckQV9JuyoLIBsXsaqxexrtFNjuctYrc0zF9guldiTdUTYGxPlt+TA0j/PKan6c3AfCf/ExcVuahG0Zk67K2JcJdjiVi6p/pDEUSPXc+5gvt2gazx2u5mxotVnQ8L8OfqHTGi6nc0osDgEkk+gBN+kxAzV0fVvidXRirqQQwJBB8xJEvf8F4l0L9O74siU6GjvdbX22IIIPtM+PIgR1ZLdimh9RGjSSWpRs2oUN+K2jus6p8js+RyzsbLNuSfWZqEEF1vUhyhCImjGiEINOsrfzv5ub3PpMwEhEjDiRUl6uB5SifSTiAQhGCDt+IQY1UBvTdS6FtDsupWRtJI1I37kNcqdtoMpFkd7odhwPrzcoVkJ8tt4nVHZsrEUb02xCj9oJoGh9h7CImasUZYkqVIoiON729vSVKEuBJAJ6P9MfpLN1qZWxFAMYF6zVk6qA2PZTuaE4GRK2l4nVLNCY745ikwnY1se82Y8NUasfWprObUtK+HOp4J4YeoyriGRMZIY6sh0oNIuie5nOzpXEUoveavr0fV5UpiLBIJFjcH1B8pQSE9AkWDR5HBg3IOsgna8J6MOf7d5l6bwrI1EqEXzdgg/8A1PR+E48GMjVmV2/lxqzD/wCxoT6E/wCM/wC3zv212cleo8L8GvCUYbagy+1GcvxTwTT2nr/DusR0Gk16Hmcv9ReIaRSNR7kV/WeH8/0/T/6c/q/p+f5z8/LrwXU+CZDuEKr5tSj3acjqOlROcik+SW354mrxfqmZjbs31JM47Ge7Vs+p+Obc96Jq7fmUTFM3rLxqzMEUWzEKoHJJNAD71OV3HpmRu98m+Bv5DYCKYjzh+JdJlwZDizIUcVYNHkWDakgj6Tn5XKsRfBIvft9d5x1+nXSZdHxLpETIyLkXKoqsiXpa1B2vfayPqDMpwEAMQQDdEg01c0eDVzGchmnJ4jkfGmJnJx4yxRDwpbdiPqf7zn5RrxqiJWn6RFylaTq8PKHykqu0EZD5mpPiX3jsPYGHrG4+pZUdAqkPoslQWGhiw0Md1u965ESzy/ien4kUqRqh8xZEgLGef7wlMWITRATsNqN7fmC5gGGu4gJuDGMKO0CploSNUsioeXOGVF0IpQNbKCHfU2q3N7kcCgNom4GnD0OR8b5VUnHj0B2FUmslUsE2bII2maWCa9DCAgaug8Sy4gwxu6BxTBWK6h5NXIiAtmBcYvnLGW7HW0cG7TIHGwB+scCbq+fxPRm8+MWDR0C5NeMOXWkJZl+G1j5gF2Y0CKPnMCx+g732MrSK3YfaYs9tSs2TmXcMugB2LfU/7SfF/wDiPaY4rraidybPrvNOHLXeYUaMDT25282sS+npOh8cZCpvgg+03/qrrqzOB+1grr/2uob+tzx2ubfEOr+ImIn9yoUP0ViVPs1fabup5eX+uF/GfP8AGfNlszOxlM8WzTnvfXoznnoLtBGQggg0RuCOQexuA7wHQhQ1bEkA+oq/6zz3TrIZ1nVvkcu7s7nlnJZjWw+Ym+JmY77m/U7yXNfhHhb9TlXDj062utTBV2BJtj9Jzb+MJEEw2FEg8jY7j6H6wCZBLkuVLBhpcguUJYaGUOQ1VDny3+lyj2jA401pF2Tqs3VVpriu/nAqBAJTnff8RuPcaAtkkVQJYngKPPniA616EHcHaiNiKgIMaTBYbywdoaNzYAER9aMXLgoL1ppK0XsV817UT+0xSNIJajmALGAYxoFSAJZMLQY/LiVQqkMH5b5lKlWCslVwaJuyeRxRjgSo8+J1up8Uxv0uPp16bGj43Zmzj/qZAdVK210NQ7n9g4nLJkHncopRGSrELaJA7A6jt9zLy9RpO0AIIrLN+VkZ5LV/GJmnL0ORcKZmQjHkLBGtfmKGnAF3sSORMKmG2Tapjv8AV4Z0XRvmdceNCztsqirJq9iSB2Mq2G18bfT0ilev9po684lYDFkLrpUksvwyGItl02bo7Xe8RTFyTpeFdL8bKmMOE1kLqfZRfczk9OFLU7aBR3C6u221iUrmdJpzueux4z0vwMz4S6uUYDUhtTYB296I8wRMqPakeW8wl43p3+aj3FSzd6lz6PLwHaI1mCzyXSzJqYS2oggaVs2wG3pfJ9BvFIxBDUDR4NEfceUAmPLIVYmw9rpCgaKo6tRuweOPWZaLwY9TBQQNRAtiFUX3LHgesBuT7f57S5q8L6VcmZEdwiuyhnbhQTRb7SFZcOIuwUEAna2IUfdjsIudf9SeHY+nzvjx5RmRarItUbUEjYkWLraclh5yEqmMMdOdGu1rVprUNV6S16ea254uhFrCrygRRKJhMwobb9zfPltBaGkAhCUIWmIyq9JBFgg2CNiD237Si3JN2T9feEx2gXAugfTn/wASIkq5aGGkUSywl6YxkUldIYbLq1EG2/1EUNh5COMksbArtt/n5lCep/Tf6TydVrGPSAgBJY0LN6R96M4HifRtjdkbZlJBFjYgkEbfSWyxJqW8ZXeJuMU1f+39IOs3feZraB4eHqGRlZTTKbB8iN73iRJJ0GIReFi6V3R3VbRNOs2Bp1NpXYmzZ22uIjoeMkHVZglpVy9HR8TbEFxJiJYhNWRmQK4yts6BgfnRdI0/U+c5wlwbi0WRJcrVJIHK0LVAB2kuaDtNVuN4OuiPSBckdZOy/uPrv7xZhMbAP2gt6biWkVcIQKmzrziLL8FXVdC6g7BiXo62FcKewkGcyM5NWbrYfTylqO0sr58yhbtL6jqGdi7sWZuWO5NCt/sBBYbw8yqCQpLL2JFE/a9pAX8PpYo50ELf83K6lHy/zWPpe8WIKg+0sCAVRmRFCqQ1kg2KI0myKJPOwB2/m+sVcISgCKlgXCEFhW8gN+4G21c3xzFRoNi+8UdjFWLYSku4S+ct8ny1Q5u634qr8oQSDeb+gzIjqzrqVWUsvmoNsv3G05mM2QLAsgWbAHqfSRjz3mpeFnfT65+sP1OnTfB/hCiNkQMxUJsjAFFZRw3J34nynr+qLsWY2SSSfMkkkk+e8QTx5e9XAyHc1uL54v1me+uJnMl6AySSNMtqlRw6dyhyaGKBgpfSdAYiwpbgGu0VAqXDy5metTFtKqovsqilUegEXAsmQSSQLBkMiiSoDejyhHVjjXIAd0fVpbY7HSQfXY9omWCRxtKgMkBnd/TP8Fqf+NDldPyBCQdX2/vtOKwF7TSdVctRKUSxCiB2r7wZayhAsCEBLkRCSAO8rK7kYwnsbEDa+P7nvEkxRbg94JlmEV79pANQqjMHSO4YojuEGpiis2lf5mofKPUyDeWAUHeEq7wxj29YYxmxtNTKddXwzx4Yumz9P8FHOYf9Rv3JQrbbeuRxR3nBuaM6Ubiglxc+yf0pDRjcqVR7ncRWneNbiZnxSVMomWfSQkgEbb/2kFYioZdQJWxqANEre4B7Gr3hdS6F3KAqhZtCsdTKpJ0qzdyBQuLI2i5Gh1KKy5QgBCra5NM29L0buCFBO1ihfHP4iZt9RLZPdZ16pwhxh20MwYpZ0lgKDFeCR5xEfnwFdiIkqYssIGWJJKkVJJBJAu4eg1qr5bq/Wrr2izLgWRJUq5VwNnU9NoIGtHtQ3yEnTd/K1gUwr15EBk4gqJtx49SHzBudJny+M28Y6kjjjkVCTQ5MnivShIeZGFGpdSIYiXfpBIqev/QydEWf+MO2n5bLBb73p3uqqcZ+qwJnc/C+Ni/9wIrsy0DYRiV7gUZuzkZmvfHGMCX6SETDo2eGrjL1mZ1TS26AM2rSdIomuav0iChqLWaMZ7Sz2y0+H+KZsIyLjcoMiaHAr5kOxG425O433MRjSCRv6zSo4m85TV4tQBGKI7w7qBjyI7ImQKbKONSNsRTDuN7+0FjZJoCyTQ4Fngek75jlWfOm0U1sBfYUPQXf9bnaz9FjHTpkGZWyM7K2HSdSKLp9V+g7f6vQzk6aNTOs++tZrMyXvOj4l1eF8WBE6cI6BhkcMT8UkijXYij7zLI2MkVvV3X4uc7lrrE0AmaGx7SJmcKyA0jlWIoblNWnf01N7znY0zM+28XCcQJmtJCEGpZeA1VHdvbee5/9Pf1Dg6V3+IpIdQAwALKQf6G/wJ4EQg8s1z7GdZ69B+rPEUy53fGoRWYkAACuPLvPOMY3qD8x9d/feJjV7Vznk4lQ8TUwJAYAg0eDRuj6HiBf/Eb0vTtkdUQAu7BVBKqLJoWzEAfUkCZVq8Y6tMuZ8mPEmBGqsaG1SlANbdyCfvMNSyCrUeVPodwfY8SZHJJJ5JJNAAb+g4gUFkqRWlsYFGTIRew2+8hMq4G7Cm87ng/Rs76FF6gR7ipJJ6/xkeb9tXxL6roHQ06lT6ic7Li32Ekk3+mZ6Py1b9JbC3eh9TFUPOXJPNcyV3ixkqC77ySTICQSSSNCWPRfSSSayzWhE71NvQ4Ed1R8gxIbtypcLQJ/au5sgD7yST0ZcqUBtN3hPhzdRmTEmxc1fNAC2Y79gCZck7X1Lz+Mg6/oXw5HxZBToaIsHtYNjsQQfvMbrJJH3M7/ABJ9LI9IC2Jck5VsDke8zad5JJx19dJ8BlxxDLJJOWmolkCux59Y7o+sfEX0MV1o6NwbRxTqb7EeUkkis8hMkkCjHdV1T5NJdy2hFRb/ANKIKRR6ASSSDPJJJAuVJJAJSO4vb/DLxYyzBVBZmIAAFkkmgABySZckQTJjKkgggg0QQQQRyCDwYEkktWfH/9k=") center center fixed;
        background-size: cover;
    }

    div{
        color:white;
    }

</style>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-8">
      <h1>Welcome to our website!</h1>
      <p>you can learn more about our website in our about us page</p> </div>
    <div class="col-md-4">
      <h2>Contact Us</h2>
      <form action="#" method="POST">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" id="message" name="message" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
