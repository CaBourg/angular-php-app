import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { Policy } from '../policy';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.scss']
})
export class DashboardComponent implements OnInit {

  policies: Policy[];
  selectedPolicy: Policy = { id: null, number: null, amount: null };

  constructor(private apiService: ApiService) { }

  ngOnInit(): void {
    this.apiService.readPolicies().subscribe((policies: Policy[])=> {
      this.policies = policies;
      console.log(this.policies);
    });
  }

}
