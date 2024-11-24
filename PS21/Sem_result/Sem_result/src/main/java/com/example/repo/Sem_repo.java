package com.example.repo;

import com.example.model.Sem_model;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface Sem_repo extends JpaRepository<Sem_model, Long> {
}
