import { Component } from '@angular/core';
import { HttpClient} from '@angular/common/http';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'front-app';
  apiUrl='http://localhost:8000';
  //requestApiUrl='http://localhost:8000/forward';
  //request = new HttpRequest<string>("GET",this.requestApiUrl);
  constructor( private http: HttpClient){ /*location.replace('http://notlocalhost');*/}

  forwardMove(){
    //this.http.request(this.request).subscribe(data=>console.log(data));
    this.http.get(this.apiUrl+'/forward').subscribe(data=>console.log(data));
  };
  backwardMove(){
    this.http.get(this.apiUrl+'/backward').subscribe(data=>console.log(data));
  };
  rightwardMove(){
    this.http.get(this.apiUrl+'/rightward').subscribe(data=>console.log(data));
  };
  leftwardMove(){
    this.http.get('http://localhost:8000/leftward').subscribe(data=>console.log(data));
  };
}
