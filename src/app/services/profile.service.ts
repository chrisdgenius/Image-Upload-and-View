import { Subject } from 'rxjs';
import { Profile } from '../models/profile';
import { map } from 'rxjs/operators';

import { Injectable } from '@angular/core';
import {
  HttpClient,
  HttpHeaders,
  HttpErrorResponse,
  HttpClientModule,
} from '@angular/common/http';

import { Observable, throwError } from 'rxjs';

import { catchError } from 'rxjs/operators';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root',
})
export class ProfileService {
  private profiles: Profile[] = [];
  private profiles$ = new Subject<Profile[]>();
  readonly url = 'http://localhost:5000/api/profile';
  // readonly url = 'https://data.mongodb-api.com/app/data-unxsr/endpoint/data/beta/action/fineOne';

  constructor(private http: HttpClient) {}

  getProfiles() {
    this.http
      .get<{ profiles: Profile[] }>(this.url)
      .pipe(
        map((profileData) => {
          return profileData.profiles;
        })
      )
      .subscribe((profiles) => {
        this.profiles = profiles;
        this.profiles$.next(this.profiles);
      });
  }
  getProfilesStream() {
    return this.profiles$.asObservable();
  }

  uploadImage(name: string, image: File): void {
    const formData = new FormData();
    formData.append('name', name);
    formData.append('image', image);
    this.http
      .post<{ profile: Profile }>(this.url, formData)
      .subscribe((formData) => {
        const profile: Profile = {
          //  _id: profileData.profile._id,
          name: name,
          // imagePath: profileData.profile.imagePath,
        };
        this.profiles.push(profile);
        this.profiles$.next(this.profiles);
      });
  }

  createImage(name: string,price:string, image: File): Observable<any> {
    const formData = new FormData();
    formData.append('image', image);
    formData.append('name', name);
    formData.append('price', price);
    return this.http.post(this.url,formData);
  }

  

  addMultipleImage(FormData): void {
    // const profileData = new FormData();

    this.http.post<any>(this.url, FormData).subscribe(
      (res) => console.log(res),
      (err) => console.log(err)
    );
  }
}
