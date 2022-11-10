import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LandImageComponent } from './land-image.component';

describe('LandImageComponent', () => {
  let component: LandImageComponent;
  let fixture: ComponentFixture<LandImageComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LandImageComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(LandImageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
